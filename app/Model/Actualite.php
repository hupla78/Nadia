<?php
App::uses('AppModel', 'Model');
/**
 * Actualite Model
 *
 * @property Img $Img
 */
class Actualite extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'titre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Img' => array(
			'className' => 'Img',
			'joinTable' => 'imgs_actualites',
			'foreignKey' => 'actualite_id',
			'associationForeignKey' => 'img_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
