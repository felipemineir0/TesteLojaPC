<?php

App::uses('AppController', 'Controller');

/**
 * Albuns Controller
 *
 * @property Album $Album
 * @property PaginatorComponent $Paginator
 */
class AlbunsController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $uses = array("Album","AlbunsTipo", "AlbunsImagem","Servicos");

    /**
     * index method
     *
     * @return void
     */
    public function index($tipo_id = null, $id = null) {
        if (!empty($this->request["pass"])) {
            $tipo_id = $this->request["pass"][0];

            if (!empty($this->request["pass"][1])) {
                $id = $this->request["pass"][1];
                $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10, 'conditions' => array('Album.codigo_fk' => $id, "Album.albuns_tipo_id" => $tipo_id),);
            } else {
                $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10, 'conditions' => array("Album.albuns_tipo_id" => $tipo_id),);
            }

            $this->set('albuns', $this->Paginator->paginate());
        } else {
            $this->Album->recursive = 1;
            $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10,);
            $this->set('albuns', $this->Paginator->paginate());
        }
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id = null) {
        if (!empty($this->request["pass"])) {
            $tipo_id = $this->request["pass"][0];
            $codigo_fk = 0;

            if (!empty($this->request["pass"][1])) {
                $codigo_fk = $this->request["pass"][1];
            }

            $albunsTipos = $this->Album->AlbunsTipo->find('list', array("conditions" => array("AlbunsTipo.id" => $tipo_id)));
            $referencia = null;

            if ($tipo_id == 1 && $codigo_fk > 0) { // Album de Conteúdo 
                $referencia = $this->Conteudo->find('list', array("conditions" => array("Conteudo.id" => $codigo_fk)));
            }
            if ($tipo_id == 2 && $codigo_fk > 0) { // Album de Notícias
                $referencia = $this->Servicos->find('list', array("conditions" => array("Servicos.id" => $codigo_fk)));
            }
            /*
            if ($tipo_id == 3 && $codigo_fk > 0) { // Album de Eventos
                $referencia = $this->Evento->find('list', array("conditions" => array("Evento.id" => $codigo_fk)));
            }
            if ($tipo_id == 4 && $codigo_fk > 0) { // Album de Produtos
                $referencia = $this->Produto->find('list', array("conditions" => array("Produto.id" => $codigo_fk)));
            }*/

            $this->set(compact('referencia'));
            $this->set(compact('albunsTipos'));
        } else {
            $albunsTipos = $this->Album->AlbunsTipo->find('list');
            $this->set(compact('albunsTipos'));
        }

        if ($this->request->is('post')) {
            $this->Album->create();
            if ($this->Album->save($this->request->data)) {
                $this->Session->setFlash(__('The album has been saved.'));
                return $this->redirect(array('action' => 'index', $this->request->data["Album"]["albuns_tipo_id"], $this->request->data["Album"]["codigo_fk"]));
            } else {
                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
            }
        }
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Album->exists($id)) {
            throw new NotFoundException(__('Invalid album'));
        }
        if ($this->request->is(array('post', 'put'))) {

//            $album = $this->Album->set(array(
//                'id' => $this->request->data["Album"]['id'],
//                'nome' => $this->request->data["Album"]['nome'],
//                'sintese' => $this->request->data["Album"]['sintese'],
//                'albuns_tipo_id' => $this->request->data["Album"]['albuns_tipo_id'],
//                'codigo_fk' => $this->request->data["Album"]['codigo_fk'],
//                'video' => $this->request->data["Album"]['video']
//            ));

            if ($this->Album->save($this->request->data)) {
                $this->Session->setFlash(__('The album has been saved.'));
                if (!empty($this->request->data["Album"]["codigo_fk"])) {
                    return $this->redirect(array('action' => 'index', $this->request->data["Album"]["albuns_tipo_id"], $this->request->data["Album"]["codigo_fk"]));
                } else
                return $this->redirect(array('action' => 'index', $this->request->data["Album"]["albuns_tipo_id"]));
            } else {
                //debug($this->Album->validationErrors);
                $this->Session->setFlash(__('The album could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('Album.' . $this->Album->primaryKey => $id));
            $this->request->data = $this->Album->find('first', $options);

            $tipo_id = $this->request->data["Album"]["albuns_tipo_id"];
            $codigo_fk = $this->request->data["Album"]["codigo_fk"];


            $albunsTipos = $this->Album->AlbunsTipo->find('list', array("conditions" => array("AlbunsTipo.id" => $tipo_id)));
            $referencia = null;

            if ($tipo_id == 1 && $codigo_fk > 0) { // Album de Conteúdo 
                $referencia = $this->Conteudo->find('list', array("conditions" => array("Conteudo.id" => $codigo_fk)));
            }
            if ($tipo_id == 2 && $codigo_fk > 0) { // Album de Notícias
                $referencia = $this->Servicos->find('list', array("conditions" => array("Servicos.id" => $codigo_fk)));
            }
            $this->set(compact('referencia'));
            $this->set(compact('albunsTipos'));


            $albunsTiposes = $this->Album->AlbunsTipo->find('list');
            $this->set(compact('albunsTiposes'));
        }
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Album->id = $id;
        if (!$this->Album->exists()) {
            throw new NotFoundException(__('Invalid album'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->Album->delete()) {
            $this->Session->setFlash(__('The album has been deleted.'));
        } else {
            $this->Session->setFlash(__('The album could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    public function getCodigoTipo() {
        if ($this->request->is(array('ajax')) && !empty($this->request->query["albuns_tipo_id"])) {

            $albuns_tipo_id = $this->request->query["albuns_tipo_id"];
            $result = null;
            if ($albuns_tipo_id == "1") {
                $result = $this->Conteudo->find("list");
            }
            if ($albuns_tipo_id == "2") {
                $result = $this->Noticia->find("list");
            }
            if ($albuns_tipo_id == "3") {
                $result = $this->Evento->find("list");
            }
            if ($albuns_tipo_id == "4") {
                $result = $this->Produto->find("list");
            }

            if (!empty($result)) {
                $this->set('lista', $result);
                $this->layout = "";
                echo $this->render('/Albuns/json_select', null, null)->body(); // This template would be in app/View/Project/json/
                exit();
            }
        } else
        exit();
    }

}
