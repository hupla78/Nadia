<?php
App::uses('AppModel', 'Model');

/**
 * Boutique Model
 *
 * @property User $User
 */
class Boutique extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'boutique';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'achat';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'achat' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'panier' => array(
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

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

    public $hasOne = 'PanierCommand';



	public $hasAndBelongsToMany =array(
		'Categorie'=>array(
			'clasName'=>'Categorie',
			'joinTable'=>'boutiques_categories',
		//	'foreignKey' => 'recipe_id',
		//	'associationForeignKey' => 'ingredient_id',
		),
		'Article'=>array(
			'className'=>'Article',
			'joinTable'=>'boutiques_articles'
		),
        'User'=>array(
			'className'=>'User',
			'joinTable'=>'boutiques_articles'
		)
	);
}
