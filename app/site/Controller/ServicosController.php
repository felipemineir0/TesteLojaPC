<?php

App::uses('AppController', 'Controller');

class ServicosController extends AppController {
	public $uses = array('Servico','CategoriaServico', 'Album', 'AlbunsImagem', 'AlbunsVideo');

	public function index() {
		$this->set('title_for_layout', 'Serviços');

		$fields = array(
			'Servico.id',
			'Servico.slug',
			'Servico.nome',
			'Servico.imagem',
			'Servico.modified',
			'CategoriaServico.nome',

			);

		$result = $this->CategoriaServico->find("all",array('order' => array()));

		$this->set('CategoriaServicos', $result);
	}

	public function view($slug_servico = "") {
		$fields = array(
			'Servico.id',
			'Servico.slug',
			'Servico.nome',
			'Servico.texto',
			'CategoriaServico.nome',
			'Servico.imagem',
			'Servico.modified',
			);

		$servico = $this->Servico->find("first", array("conditions" => array("Servico.slug" => $slug_servico)));
		$this->set(compact('servico'));

		$albuns = $this->Album->find("all", array(
            "conditions" => array("Album.albuns_tipo_id" => 2, "Album.codigo_fk" => $servico['Servico']['id']),
            "fields" => array("Album.nome", "Album.id", "Album.video"),
        ));

		$this->set('title_for_layout', $servico['CategoriaServico']['nome']." | ".$servico['Servico']['nome']);

		$servicos = $this->Servico->find("all",array('limit'=>"8", 'conditions'=>array('Servico.categoria_servico_id' =>$servico["Servico"]["categoria_servico_id"] )));
		$this->set('servicos', $servicos);

		$this->set(compact('albuns'));
	}
}