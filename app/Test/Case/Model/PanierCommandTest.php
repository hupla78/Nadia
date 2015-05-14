<?php
App::uses('PanierCommand', 'Model');

/**
 * PanierCommand Test Case
 *
 */
class PanierCommandTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.panier_command',
		'app.user',
		'app.adresse_pofile'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PanierCommand = ClassRegistry::init('PanierCommand');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PanierCommand);

		parent::tearDown();
	}

}
