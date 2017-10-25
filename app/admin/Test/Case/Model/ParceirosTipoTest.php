<?php
App::uses('ParceirosTipo', 'Model');

/**
 * ParceirosTipo Test Case
 *
 */
class ParceirosTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parceiros_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParceirosTipo = ClassRegistry::init('ParceirosTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParceirosTipo);

		parent::tearDown();
	}

}
