<?php
App::uses('Noticia', 'Model');

/**
 * Noticia Test Case
 *
 */
class NoticiaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		$this->Noticia = ClassRegistry::init('Noticia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Noticia);

		parent::tearDown();
	}

}
