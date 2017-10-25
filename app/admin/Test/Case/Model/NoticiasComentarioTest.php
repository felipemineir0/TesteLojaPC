<?php
App::uses('NoticiasComentario', 'Model');

/**
 * NoticiasComentario Test Case
 *
 */
class NoticiasComentarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticias_comentario',
		'app.noticia',
		'app.noticias_area',
		'app.idioma',
		'app.evento',
		'app.noticias_categoria',
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
		$this->NoticiasComentario = ClassRegistry::init('NoticiasComentario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NoticiasComentario);

		parent::tearDown();
	}

}
