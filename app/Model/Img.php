<?php
App::uses('AppModel', 'Model');
/**
 * Img Model
 *
 */
class Img extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
    public $hasOne = array('cm');

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id_user' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'format' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
        'avatar_file'=> array(
        'rule' => array('fileExtension',array('jpeg','jpg','png'),false),
				'message' => 'merci d\'envoyer une image.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
        
        
        )
	);
    
    public function fileExtension($check, $extensions , $empty){
        $file = current($check);
        
        if($empty && empty($file['tmp_name'])){return true;}
        
        $extension = strtolower(pathinfo($file['name'].PATHINFO_EXTENSION));
        return in_array($extension,$extensions);
    }

    public function afterSave($created){
      $var = $this->data[$this->Model]['img_file']['tmp_name'];
            if(isset($var)){
                if(!empty($var['tmp_name'])){
                    move_uploaded_file($var['tmp_name'],IMAGES.'import'.DS.
                        $this->data['name'].'.'.this->data['format'];
                                      
                                      
                                      );
                }
            
            }
    
    
    }
    
    
    
/*public function beforeValidate($options = array()){
    
    $this->validator()->add(
	'img_file',array(
	'notEmpty'=>array('rule'=>array('notEmpty'),
	'message'=>'merci de mettre un fichier'))
	);
    
    }*/
    
}
