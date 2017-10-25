<?php
App::uses('AlbunsVideo', 'Model');

/**
 * AlbunsVideo Test Case
 *
 */
class AlbunsVideoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.albuns_video',
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
		$this->AlbunsVideo = ClassRegistry::init('AlbunsVideo');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AlbunsVideo);

		parent::tearDown();
	}

}
