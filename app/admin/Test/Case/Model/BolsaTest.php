<?php
App::uses('Bolsa', 'Model');

/**
 * Bolsa Test Case
 *
 */
class BolsaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bolsa',
		'app.academico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bolsa = ClassRegistry::init('Bolsa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bolsa);

		parent::tearDown();
	}

}
