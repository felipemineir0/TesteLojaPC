<?php
App::uses('Academico', 'Model');

/**
 * Academico Test Case
 *
 */
class AcademicoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.academico',
		'app.alumni',
		'app.instituicao',
		'app.instituicoes_grupo',
		'app.graduacao',
		'app.bolsa',
		'app.area',
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
		$this->Academico = ClassRegistry::init('Academico');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Academico);

		parent::tearDown();
	}

}
