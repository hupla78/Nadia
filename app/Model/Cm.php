<?php
App::uses('AppModel', 'Model');
/**
 * Cm Model
 *
 */
class Cm extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

    public $belongsTo = array('img');
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'value' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
    
        public function beforeSave( $options = array()){
            
            if($this->data['Cm']['img_id']!= 0)
            {$this->data['Cm']['value']='img-type';}
        
        }
    
    
        public function afterSave($created, $options = array()){
        
    
        $this->recursive = 1;    
            //debug($this->find('all'));
        file_put_contents(APP.'cms/base.json',json_encode($this->find('all')));
        
    }
    
    
}
