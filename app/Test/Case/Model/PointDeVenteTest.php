<?php
App::uses('PointDeVente', 'Model');

/**
 * PointDeVente Test Case
 *
 */
class PointDeVenteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.point_de_vente',
		'app.image'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PointDeVente = ClassRegistry::init('PointDeVente');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PointDeVente);

		parent::tearDown();
	}

}
