<?php
App::uses('ParceiroTipo', 'Model');

/**
 * ParceiroTipo Test Case
 *
 */
class ParceiroTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.parceiro_tipo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ParceiroTipo = ClassRegistry::init('ParceiroTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ParceiroTipo);

		parent::tearDown();
	}

}
