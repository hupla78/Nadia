<?php
App::uses('AdressePofile', 'Model');

/**
 * AdressePofile Test Case
 *
 */
class AdressePofileTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.adresse_pofile',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AdressePofile = ClassRegistry::init('AdressePofile');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AdressePofile);

		parent::tearDown();
	}

}
