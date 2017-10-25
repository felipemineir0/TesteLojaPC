<?php
App::uses('ImoveisStatu', 'Model');

/**
 * ImoveisStatu Test Case
 *
 */
class ImoveisStatuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.imoveis_statu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ImoveisStatu = ClassRegistry::init('ImoveisStatu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ImoveisStatu);

		parent::tearDown();
	}

}
