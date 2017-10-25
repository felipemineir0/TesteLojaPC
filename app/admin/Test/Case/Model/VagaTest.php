<?php
App::uses('Vaga', 'Model');

/**
 * Vaga Test Case
 *
 */
class VagaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.vaga',
		'app.idioma',
		'app.evento',
		'app.noticia',
		'app.noticias_area',
		'app.noticias_categoria',
		'app.noticias_categorias_noticia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Vaga = ClassRegistry::init('Vaga');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Vaga);

		parent::tearDown();
	}

}
