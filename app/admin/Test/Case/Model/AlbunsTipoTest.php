<?php
App::uses('AlbunsTipo', 'Model');

/**
 * AlbunsTipo Test Case
 *
 */
class AlbunsTipoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.albuns_tipo',
		'app.album'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AlbunsTipo = ClassRegistry::init('AlbunsTipo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlbunsTipo);

		parent::tearDown();
	}

}
