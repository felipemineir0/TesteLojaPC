<?php
App::uses('AppModel', 'Model');
/**
 * CategoriaServico Model
 *
 * @property Servico $Servico
 */
class CategoriaServico extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $displayField = 'nome';
/**
 * hasMany associations
 *
 * @var array
 */
public $hasMany = array(
	'Servico' => array(
		'className' => 'Servico',
		'foreignKey' => 'categoria_servico_id',
		'dependent' => false,
		'conditions' => '',
		'fields' => '',
		'order' => '',
		'limit' => '',
		'offset' => '',
		'exclusive' => '',
		'finderQuery' => '',
		'counterQuery' => ''
		)
	);


public function beforeSave($options = null) {

	if (!empty($this->data[$this->alias]['nome'])) {
		if (empty($this->data[$this->alias]['slug'])) {
			$slug = strtolower(Inflector::slug($this->data[$this->alias]['nome'], "-"));
			if (!empty($this->data[$this->alias]['id'])) {
				$count_slugs = $this->find("count", array(
					'conditions' => array($this->alias . '.slug like' => $slug, $this->alias . ".id <>" => $this->data[$this->alias]['id']),
					'fields' => array($this->alias . '.slug')
					));
			} else {
				$count_slugs = $this->find("count", array(
					'conditions' => array($this->alias . '.slug like' => $slug),
					'fields' => array($this->alias . '.slug')
					));
			}

			$contador = 1;
			while ($count_slugs > 0) {
				$contador++;

				$slug .= '-' . $contador;
				$count_slugs = $this->find("count", array(
					'conditions' => array($this->alias . '.slug like' => $slug),
					'fields' => array($this->alias . '.slug')
					));
			}
			$this->data[$this->alias]['slug'] = $slug;
		}
	}

	
}

}
