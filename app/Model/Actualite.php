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


    public $belongsTo = array(
        'Img' => array(
            'className' => 'Img',
            'foreignKey' => 'image_id'
        )
    );

}
