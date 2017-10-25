<?php
App::uses('Idioma', 'Model');

/**
 * Idioma Test Case
 *
 */
class IdiomaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.idioma',
		'app.evento',
		'app.noticia',
		'app.noticias_categoria',
		'app.noticias_area',
		'app.noticias_categorias_noticia',
		'app.vaga'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Idioma = ClassRegistry::init('Idioma');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Idioma);

		parent::tearDown();
	}

}
