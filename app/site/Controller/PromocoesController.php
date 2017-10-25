<?php

App::uses('AppController', 'Controller');

class PromocoesController extends AppController {

	public $uses = array('Promocao');

	public function index() {

		$this->set('title_for_layout', 'Promocoes');

		$fields = array(
			'Promocao.id',
			'Promocao.slug',
			'Promocao.nome',
			'Promocao.ativo',
			'Promocao.imagem',
			'Promocao.modified',
			);

		$promocoes = $this->Promocao->find("all", array('conditions' => array('Promocao.ativo' => 1)));

		$this->set(compact('promocoes'));
	}

	public function view($slug_promocao = "") {
		$fields = array(
			'Promocao.id',
			'Promocao.slug',
			'Promocao.nome',
			'Promocao.texto',			
			'Promocao.imagem',
			'Promocao.modified',
			);

		$promo = $this->Promocao->find("first", array("conditions" => array("Promocao.slug" => $slug_promocao)));
		$this->set(compact('promo'));

		$this->set('title_for_layout', $promo['Promocao']['nome']);

		$promoc = $this->Promocao->find("all", array());
		$this->set('promoc', $promoc);


	}

	public function contato() {
		if ($this->request->is('ajax') || $this->request->is('post')) {
			try {
				App::import('Component', 'EmailTemplate');
				$EmailTemplate = new EmailTemplateComponent();
				$EmailTemplate->EmailAvaliacao($this->request->data);
				exit("true");
			} catch (Exception $e) {
				exit(debug($e->getMessage()));
			}
		}
	}
}