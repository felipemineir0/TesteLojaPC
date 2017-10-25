<?php
App::uses('ImoveisTipo', 'Model');

/**
 * ImoveisTipo Test Case
 *
 */
class ImoveisTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imoveis_tipo',
		'app.imovel',
		'app.cidade',
		'app.estado',
		'app.bairro',
		'app.imoveis_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImoveisTipo = ClassRegistry::init('ImoveisTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImoveisTipo);

		parent::tearDown();
	}

}
