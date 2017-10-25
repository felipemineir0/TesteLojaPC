<?php
App::uses('CategoriaServico', 'Model');

/**
 * CategoriaServico Test Case
 *
 */
class CategoriaServicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.categoria_servico',
		'app.servico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CategoriaServico = ClassRegistry::init('CategoriaServico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CategoriaServico);

		parent::tearDown();
	}

}
