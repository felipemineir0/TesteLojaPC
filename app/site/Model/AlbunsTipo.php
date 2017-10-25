<?php

App::uses('AppModel', 'Model');

/**
 * AlbunsTipo Model
 *
 * @property Album $Album
 */
class AlbunsTipo extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nome';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Album' => array(
            'className' => 'Album',
            'foreignKey' => 'albuns_tipo_id',
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

}
