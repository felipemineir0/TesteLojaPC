<?php
/**
 * ImovelFixture
 *
 */
class ImovelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'slug' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'codigo' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descricao' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lancamento' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4, 'unsigned' => false),
		'dormitorios' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'banheiros' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'imagem' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'suites' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'metragem_terreno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'metragem_construcao' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'garagem' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'valor' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'imoveis_tipo_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'cidade_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'bairro_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'logradouro' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 150, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'imoveis_status_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_reference_10' => array('column' => 'bairro_id', 'unique' => 0),
			'fk_reference_11' => array('column' => 'imoveis_status_id', 'unique' => 0),
			'fk_reference_7' => array('column' => 'imoveis_tipo_id', 'unique' => 0),
			'fk_reference_8' => array('column' => 'cidade_id', 'unique' => 0)
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
			'nome' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'codigo' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'lancamento' => 1,
			'dormitorios' => 1,
			'banheiros' => 1,
			'imagem' => 'Lorem ipsum dolor sit amet',
			'suites' => 1,
			'metragem_terreno' => 'Lorem ipsum dolor ',
			'metragem_construcao' => 'Lorem ipsum dolor ',
			'garagem' => 1,
			'valor' => 'Lorem ipsum dolor sit amet',
			'imoveis_tipo_id' => 1,
			'cidade_id' => 1,
			'bairro_id' => 1,
			'logradouro' => 'Lorem ipsum dolor sit amet',
			'imoveis_status_id' => 1,
			'created' => '2014-10-09 14:35:12',
			'modified' => '2014-10-09 14:35:12'
		),
	);

}
