<?php
App::uses('PanierVente', 'Model');

/**
 * PanierVente Test Case
 *
 */
class PanierVenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.panier_vente',
		'app.article',
		'app.img',
		'app.cm',
		'app.category',
		'app.command'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PanierVente = ClassRegistry::init('PanierVente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PanierVente);

		parent::tearDown();
	}

}
