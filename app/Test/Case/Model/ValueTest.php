<?php
App::uses('Value', 'Model');

/**
 * Value Test Case
 *
 */
class ValueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.value',
		'app.cm',
		'app.img',
		'app.article',
		'app.category',
		'app.categorie',
		'app.text'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Value = ClassRegistry::init('Value');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Value);

		parent::tearDown();
	}

}
