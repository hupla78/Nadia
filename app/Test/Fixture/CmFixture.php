<<<<<<< HEAD
<?php
/**
 * CmFixture
 *
 */
class CmFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'name' => 'Lorem ip',
			'value' => 'Lorem ip'
		),
	);

}
=======
<?php
/**
 * CmFixture
 *
 */
class CmFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'img_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'article_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'categorie_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'value_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'text_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'name' => 'Lorem ip',
			'type' => 'Lorem ip',
			'img_id' => 1,
			'article_id' => 1,
			'categorie_id' => 1,
			'value_id' => 1,
			'text_id' => 1
		),
	);

}
>>>>>>> b3c66900fd23e7d97ceea408fd1ab9b9230130de
