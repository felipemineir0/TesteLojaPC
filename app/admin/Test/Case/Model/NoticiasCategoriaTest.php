<?php
App::uses('NoticiasCategoria', 'Model');

/**
 * NoticiasCategoria Test Case
 *
 */
class NoticiasCategoriaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticias_categoria',
		'app.noticias_area',
		'app.idioma',
		'app.evento',
		'app.noticia',
		'app.vaga',
		'app.noticias_categorias_noticia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NoticiasCategoria = ClassRegistry::init('NoticiasCategoria');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NoticiasCategoria);

		parent::tearDown();
	}

}
