<?php
App::uses('NoticiasCategoriasNoticia', 'Model');

/**
 * NoticiasCategoriasNoticia Test Case
 *
 */
class NoticiasCategoriasNoticiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticias_categorias_noticia',
		'app.noticia',
		'app.noticias_area',
		'app.idioma',
		'app.evento',
		'app.noticias_categoria',
		'app.vaga'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NoticiasCategoriasNoticia = ClassRegistry::init('NoticiasCategoriasNoticia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NoticiasCategoriasNoticia);

		parent::tearDown();
	}

}
