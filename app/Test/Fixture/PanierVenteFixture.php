<?php
/**
 * PanierVenteFixture
 *
 */
class PanierVenteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'article_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'command_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'q' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'p' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'article_id' => 1,
			'command_id' => 1,
			'q' => 1,
			'p' => 1
		),
	);

}
