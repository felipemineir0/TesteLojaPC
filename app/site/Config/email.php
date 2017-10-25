<?php

class EmailConfig {

    public $default = array(
        'transport' => 'Mail',
        'from' => '',
        'charset' => 'utf-8',
    );
    
    public $smtp = array(
        'transport' => 'Smtp',
        'host' => '',
        'port' => 587,
        'timeout' => 30,
        'username' => '',
        'password' => '',
        'client' => null,
        'log' => true,
        'emailFormat' => "html"
    );
}