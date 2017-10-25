<?php
App::uses('Graduacao', 'Model');

/**
 * Graduacao Test Case
 *
 */
class GraduacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.graduacao',
		'app.academico'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Graduacao = ClassRegistry::init('Graduacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Graduacao);

		parent::tearDown();
	}

}
