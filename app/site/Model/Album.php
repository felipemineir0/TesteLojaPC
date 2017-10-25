<?php

App::uses('AppModel', 'Model');

/**
 * Album Model
 *
 * @property AlbunsTipos $AlbunsTipos
 */
class Album extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'nome';
    public $imagem_upload = null;

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'albuns_tipo_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'video' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'nome' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'AlbunsTipo' => array(
            'className' => 'AlbunsTipo',
            'foreignKey' => 'albuns_tipo_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    public $hasMany = array(
        'AlbunsImagem' => array(
            'className' => 'AlbunsImagem',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => ''
            //'order' => 'AlbunsImagem.ordem'
        ),
        'AlbunsVideo' => array(
            'className' => 'AlbunsVideo',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
