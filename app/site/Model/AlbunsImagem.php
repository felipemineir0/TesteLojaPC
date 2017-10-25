<?php

App::uses('AppModel', 'Model');

/**
 * AlbunsImagem Model
 *
 * @property Album $Album
 */
class AlbunsImagem extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $imagem_upload = null;
    

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Album' => array(
            'className' => 'Album',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => ''
            //'order' => 'ordem ASC'
            )
        );


}
