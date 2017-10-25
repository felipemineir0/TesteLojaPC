<?php
App::uses('Embaixador', 'Model');

/**
 * Embaixador Test Case
 *
 */
class EmbaixadorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.embaixador',
		'app.estado',
		'app.ambassador'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Embaixador = ClassRegistry::init('Embaixador');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Embaixador);

		parent::tearDown();
	}

}
