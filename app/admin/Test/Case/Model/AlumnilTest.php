<?php
App::uses('Alumnil', 'Model');

/**
 * Alumnil Test Case
 *
 */
class AlumnilTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.alumnil',
		'app.sexo'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Alumnil = ClassRegistry::init('Alumnil');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Alumnil);

		parent::tearDown();
	}

}
