<?php
App::uses('Color', 'Model');

/**
 * Color Test Case
 *
 */
class ColorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.color',
		'app.cm',
		'app.img',
		'app.article',
		'app.category',
		'app.categorie',
		'app.value',
		'app.text'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Color = ClassRegistry::init('Color');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Color);

		parent::tearDown();
	}

}
