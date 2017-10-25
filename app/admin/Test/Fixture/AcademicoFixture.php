<?php
/**
 * AcademicoFixture
 *
 */
class AcademicoFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'alumni_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'instituicao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'instituicao_outro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'graduacao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'graduacao_outro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bolsa_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'bolsa_outro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'area_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'area_outro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ano_inicio' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ano_final' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'nome_curso' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'universidade_origem' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lattes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_reference_15' => array('column' => 'graduacao_id', 'unique' => 0),
			'fk_reference_16' => array('column' => 'bolsa_id', 'unique' => 0),
			'fk_reference_17' => array('column' => 'area_id', 'unique' => 0),
			'fk_reference_18' => array('column' => 'alumni_id', 'unique' => 0),
			'fk_reference_19' => array('column' => 'instituicao_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'alumni_id' => 1,
			'instituicao_id' => 1,
			'instituicao_outro' => 'Lorem ipsum dolor sit amet',
			'graduacao_id' => 1,
			'graduacao_outro' => 'Lorem ipsum dolor sit amet',
			'bolsa_id' => 1,
			'bolsa_outro' => 'Lorem ipsum dolor sit amet',
			'area_id' => 1,
			'area_outro' => 'Lorem ipsum dolor sit amet',
			'ano_inicio' => 'Lorem ipsum d',
			'ano_final' => 'Lorem ipsum d',
			'nome_curso' => 'Lorem ipsum dolor sit amet',
			'universidade_origem' => 'Lorem ipsum dolor sit amet',
			'lattes' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-09-15 15:01:49',
			'modified' => '2014-09-15 15:01:49'
		),
	);

}
