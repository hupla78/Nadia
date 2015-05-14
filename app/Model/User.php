<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property  $
 * @property  $
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
<<<<<<< HEAD
				'message' => 'Merci de rentré un nom valide',
=======
				'message' => 'Merci de rentré un nom valide',
>>>>>>> origin/master
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
			'isUnique' => array(
				'rule' => array('isUnique'),
<<<<<<< HEAD
				'message' => 'Deja utilisé'
=======
				'message' => 'Deja utilisé'
>>>>>>> origin/master
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(
				'rule' => array('email'),
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
		),
		'isAdmin' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'isActivate' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	public function beforeValidate($options = array()){
	
	$this->validator()->add(
	'passwordVerif',array(
	'equalTo'=>array('rule'=>array('equalto',$this->data['User']['password']),
	'message'=>'les mots de passe ne sont pas identique.'))
	);
	
    }
    
<<<<<<< HEAD
	public function beforeSave($options = array()){

        if(!empty($this->data['User']['password']))
    		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
=======
	public function beforeSave($options = array()){

        if(!empty($this->data['User']['password']))
    		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
>>>>>>> origin/master
        
        
        
        return true;
    
    }
    
    
    
<<<<<<< HEAD
    /**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AdressePofile' => array(
			'className' => 'AdressePofile',
			'foreignKey' => 'User_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
        'PanierCommand'
	);
    
    
    
=======
    /**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'AdressePofile' => array(
			'className' => 'AdressePofile',
			'foreignKey' => 'User_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
        'PanierCommand'
	);



>>>>>>> origin/master
    


}
