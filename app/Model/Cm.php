
<?php
App::uses('AppModel', 'Model');
/**
 * Cm Model
 *
 * @property Img $Img
 * @property Article $Article
 * @property Categorie $Categorie
 * @property Value $Value
 * @property Text $Text
 * @property Img $Img
 */
class Cm extends AppModel {

    /**
	 * Display field
	 *
	 * @var string
	 */
    public $displayField = 'name';

    /**
	 * Validation rules
	 *
	 * @var array
	 */
    public $validate = array(
        'name' => array(
            /*'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),*/
            'isUnique' => array(
                'rule' => array('isUnique'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        //	'type' => array(
        //			'a' => array(
        //				'rule' => array('a'),
        //'message' => 'Your custom message here',
        //'allowEmpty' => false,
        //'required' => false,
        //'last' => false, // Stop validation after this rule
        //				//'on' => 'create', // Limit validation to 'create' or 'update' operations
        //			),
        //	),
        'img_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'article_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'categorie_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'value_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'text_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'color_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
	 * belongsTo associations
	 *
	 * @var array
	 */
    public $belongsTo = array(
        'Img' => array(
            'className' => 'Img',
            'foreignKey' => 'img_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Article' => array(
            'className' => 'Article',
            'foreignKey' => 'article_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Categorie' => array(
            'className' => 'Categorie',
            'foreignKey' => 'categorie_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Value' => array(
            'className' => 'Value',
            'foreignKey' => 'value_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Text' => array(
            'className' => 'Text',
            'foreignKey' => 'text_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Color' => array(
            'className' => 'Color',
            'foreignKey' => 'color_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
	 * hasMany associations
	 *
	 * @var array
	 */
    public $hasMany = array(
        'Img' => array(
            'className' => 'Img',
            'foreignKey' => 'cm_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );



    public function beforeSave( $options = array()){

    }


    
    public function export(){
        $this->recursive = 2;
        //		debug($this->find('all'));

        $tabDeSave= array();

        foreach ($this->find('all') as $key) {
            $cat=ucfirst($key['Cm']['type']);
            //           echo $cat;
            //          echo  $key[$cat]['value'];
            //
            if($cat!='Article'){
                echo $cat;
                $tabDeSave[$key['Cm']['name']]= $key[$cat]['value'];
            }else{
                //debug($key[$cat]);
                $tabDeSave[$key['Cm']['name']]= $key[$cat];
                //$tabDeSave[$key['Cm']['name']]['Img']= $key['Img'];

            }

        }

        file_put_contents(APP.'cms/base.json',json_encode($tabDeSave));

    }
}

