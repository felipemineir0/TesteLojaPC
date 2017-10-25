<?php
App::uses('Sexo', 'Model');

/**
 * Sexo Test Case
 *
 */
class SexoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sexo',
		'app.alumnil'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sexo = ClassRegistry::init('Sexo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sexo);

		parent::tearDown();
	}

}
