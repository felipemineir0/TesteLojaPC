<?php
App::uses('NoticiasArea', 'Model');

/**
 * NoticiasArea Test Case
 *
 */
class NoticiasAreaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.noticias_area'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->NoticiasArea = ClassRegistry::init('NoticiasArea');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->NoticiasArea);

		parent::tearDown();
	}

}
