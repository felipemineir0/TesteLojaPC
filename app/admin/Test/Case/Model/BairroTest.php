<?php
App::uses('Bairro', 'Model');

/**
 * Bairro Test Case
 *
 */
class BairroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.bairro',
		'app.cidade',
		'app.imovel'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Bairro = ClassRegistry::init('Bairro');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Bairro);

		parent::tearDown();
	}

}
