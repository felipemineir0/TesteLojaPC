<?php
App::uses('AcademicosArea', 'Model');

/**
 * AcademicosArea Test Case
 *
 */
class AcademicosAreaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.academicos_area'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AcademicosArea = ClassRegistry::init('AcademicosArea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AcademicosArea);

		parent::tearDown();
	}

}
