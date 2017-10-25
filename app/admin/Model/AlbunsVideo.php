<?php

App::uses('AppModel', 'Model');

/**
 * AlbunsVideo Model
 *
 * @property Album $Album
 */
class AlbunsVideo extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'album_id' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'url' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
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
        'Album' => array(
            'className' => 'Album',
            'foreignKey' => 'album_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    public function beforeSave($options = null) {


        if (!empty($this->data[$this->alias]['url'])) {
            if (strpos($this->data[$this->alias]['url'], "http://") === false && strpos($this->data[$this->alias]['url'], "https://") === false) {
                $this->data[$this->alias]['url'] = "http://" . $this->data[$this->alias]['url'];
            }
            $codigo_video = $this->youtube_codigo_video($this->data[$this->alias]['url']);

            if (!empty($codigo_video)) {
                $this->data[$this->alias]['codigo_video'] = $codigo_video;
            } else
                return false;

            $img = $this->youtube_thumbnail_url($this->data[$this->alias]['url']);
            if (!empty($img)) {
                $this->data[$this->alias]['imagem'] = $img;
            }
        }
        //debug($this->data);
        //exit();
    }

    public function youtube_thumbnail_url($url) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            // URL is Not valid
            return false;
        }
        $domain = parse_url($url, PHP_URL_HOST);
        if ($domain == 'www.youtube.com' OR $domain == 'youtube.com') { // http://www.youtube.com/watch?v=t7rtVX0bcj8&feature=topvideos_film
            if ($querystring = parse_url($url, PHP_URL_QUERY)) {
                parse_str($querystring);
                if (!empty($v))
                //return "https://i.ytimg.com/vi_webp/$v/";
                    return "http://img.youtube.com/vi/$v/0.jpg";
                else
                    return false;
            } else
                return false;
        }
        elseif ($domain == 'youtu.be') { // something like http://youtu.be/t7rtVX0bcj8
            $v = str_replace('/', '', parse_url($url, PHP_URL_PATH));
            return (empty($v)) ? false : "http://img.youtube.com/vi/$v/0.jpg";
        } else
            return false;
    }

    public function youtube_codigo_video($url) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            // URL is Not valid
            return false;
        }
        $domain = parse_url($url, PHP_URL_HOST);
        if ($domain == 'www.youtube.com' OR $domain == 'youtube.com') { // http://www.youtube.com/watch?v=t7rtVX0bcj8&feature=topvideos_film
            if ($querystring = parse_url($url, PHP_URL_QUERY)) {
                parse_str($querystring);
                if (!empty($v))
                //return "https://i.ytimg.com/vi_webp/$v/";
                    return $v;
                else
                    return false;
            } else
                return false;
        }
        elseif ($domain == 'youtu.be') { // something like http://youtu.be/t7rtVX0bcj8
            $v = str_replace('/', '', parse_url($url, PHP_URL_PATH));
            return (empty($v)) ? false : "http://img.youtube.com/vi/$v/0.jpg";
        } else
            return false;
    }

}
