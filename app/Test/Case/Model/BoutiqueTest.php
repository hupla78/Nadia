<?php
App::uses('Boutique', 'Model');

/**
 * Boutique Test Case
 *
 */
class BoutiqueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.boutique',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Boutique = ClassRegistry::init('Boutique');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Boutique);

		parent::tearDown();
	}

}
