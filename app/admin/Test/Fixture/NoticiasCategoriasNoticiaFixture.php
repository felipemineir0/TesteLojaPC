<?php
/**
 * NoticiasCategoriasNoticiaFixture
 *
 */
class NoticiasCategoriasNoticiaFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'noticia_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'noticias_categoria_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_tb_noticias_categorias_noticias_tb_noticias' => array('column' => 'noticia_id', 'unique' => 0),
			'fk_tb_noticias_categorias_noticias_tb_noticias_categorias' => array('column' => 'noticias_categoria_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'noticia_id' => 1,
			'noticias_categoria_id' => 1,
			'created' => '2014-07-24 16:38:57',
			'modified' => '2014-07-24 16:38:57'
		),
	);

}
