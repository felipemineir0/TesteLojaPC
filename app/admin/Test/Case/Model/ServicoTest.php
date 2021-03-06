<?php
App::uses('Servico', 'Model');

/**
 * Servico Test Case
 *
 */
class ServicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.servico',
		'app.categoria_servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Servico = ClassRegistry::init('Servico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Servico);

		parent::tearDown();
	}

}
