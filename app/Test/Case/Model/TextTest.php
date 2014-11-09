<?php
App::uses('Text', 'Model');

/**
 * Text Test Case
 *
 */
class TextTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.text',
		'app.cm',
		'app.img',
		'app.article',
		'app.category',
		'app.categorie',
		'app.value'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Text = ClassRegistry::init('Text');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Text);

		parent::tearDown();
	}

}
