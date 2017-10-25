<?php

App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public $uses = array('Servico');

	public function index() {
		$servicos = $this->Servico->find("all",array('limit'=>"8", "order" => "rand()"));
		$this->set('servicos', $servicos);
	}

}
