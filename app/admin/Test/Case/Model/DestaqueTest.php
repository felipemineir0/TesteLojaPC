<?php
App::uses('Destaque', 'Model');

/**
 * Destaque Test Case
 *
 */
class DestaqueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.destaque'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Destaque = ClassRegistry::init('Destaque');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Destaque);

		parent::tearDown();
	}

}
