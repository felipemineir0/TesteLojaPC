<?php
App::uses('InstituicoesGrupo', 'Model');

/**
 * InstituicoesGrupo Test Case
 *
 */
class InstituicoesGrupoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.instituicoes_grupo',
		'app.instituicao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InstituicoesGrupo = ClassRegistry::init('InstituicoesGrupo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InstituicoesGrupo);

		parent::tearDown();
	}

}
