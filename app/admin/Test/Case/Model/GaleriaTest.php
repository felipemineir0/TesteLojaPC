<?php
App::uses('Galeria', 'Model');

/**
 * Galeria Test Case
 *
 */
class GaleriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.galeria'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Galeria = ClassRegistry::init('Galeria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Galeria);

		parent::tearDown();
	}

}
