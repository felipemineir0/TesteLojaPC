<?php
App::uses('Area', 'Model');

/**
 * Area Test Case
 *
 */
class AreaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.area',
		'app.academico',
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
		$this->Area = ClassRegistry::init('Area');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Area);

		parent::tearDown();
	}

}
