<?php
App::uses('AppController', 'Controller');
/**
 * CategoriaServicos Controller
 *
 * @property CategoriaServico $CategoriaServico
 * @property PaginatorComponent $Paginator
 */
class CategoriaServicosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CategoriaServico->recursive = 0;
		$this->set('categoriaServicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CategoriaServico->exists($id)) {
			throw new NotFoundException(__('Invalid categoria servico'));
		}
		$options = array('conditions' => array('CategoriaServico.' . $this->CategoriaServico->primaryKey => $id));
		$this->set('categoriaServico', $this->CategoriaServico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CategoriaServico->create();
			if ($this->CategoriaServico->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria servico could not be saved. Please, try again.'));
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
		if (!$this->CategoriaServico->exists($id)) {
			throw new NotFoundException(__('Invalid categoria servico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CategoriaServico->save($this->request->data)) {
				$this->Session->setFlash(__('The categoria servico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The categoria servico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CategoriaServico.' . $this->CategoriaServico->primaryKey => $id));
			$this->request->data = $this->CategoriaServico->find('first', $options);
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
		$this->CategoriaServico->id = $id;
		if (!$this->CategoriaServico->exists()) {
			throw new NotFoundException(__('Invalid categoria servico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->CategoriaServico->delete()) {
			$this->Session->setFlash(__('The categoria servico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The categoria servico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
