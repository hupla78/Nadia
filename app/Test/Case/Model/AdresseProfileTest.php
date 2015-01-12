<?php
App::uses('AdresseProfile', 'Model');

/**
 * AdresseProfile Test Case
 *
 */
class AdresseProfileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adresse_profile',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdresseProfile = ClassRegistry::init('AdresseProfile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdresseProfile);

		parent::tearDown();
	}

}
