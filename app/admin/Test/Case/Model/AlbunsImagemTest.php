<?php
App::uses('AlbunsImagem', 'Model');

/**
 * AlbunsImagem Test Case
 *
 */
class AlbunsImagemTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.albuns_imagem',
		'app.album',
		'app.tipo_albuns'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlbunsImagem = ClassRegistry::init('AlbunsImagem');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlbunsImagem);

		parent::tearDown();
	}

}
