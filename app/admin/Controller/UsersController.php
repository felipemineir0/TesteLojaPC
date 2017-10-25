<?php

App::uses('AppController', 'Controller');

/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');

    //public $helpers = array('FormAdmin');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout');
    }
    public function login() {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {

                $this->Cookie->write('User', $this->Auth->user(), false, 43200);
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash(__('Usuário ou senha inválidos. Tente novamente.'));
        }
        $this->layout = '';
    }

    public function logout() {
        $this->Cookie->delete('User');
        $this->redirect($this->Auth->logout());
    }

    public function index() {

        $this->paginate = array('order' => array('created' => 'desc',), 'limit' => 10);
        $this->set('users', $this->Paginator->paginate());
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuário Salvo.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não pode ser salvo. Por favor, tente novamente.'));
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
        if (!$this->User->exists($id)) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved.'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
            $this->request->data = $this->User->find('first', $options);
        }
    }

    public function alterar_senha($id = null) {


        if (!empty($this->request->data)) {
            //echo($this->request->is('post'));
            //exit(debug($this->request));

            $this->User->recursive = -1;
            $user = $this->User->find("first", array("conditions" => array("User.id" => $this->request->data["User"]["id"])));

            $passwordHasher = new SimplePasswordHasher();
            $senha_anterior = $passwordHasher->hash(
                    $this->request->data["User"]["senha_anterior"]
            );
            //exit(debug($user));
            //exit(debug($this->request->data["User"]["nova_senha"]));
            if ($senha_anterior == $user["User"]["password"]) {
                //exit(debug($this->request->data["User"]["nova_senha"]));
                $user["User"]["password"] = $this->request->data["User"]["nova_senha"];
                //exit(debug($user));
                if ($this->User->save($user)) {
                    //exit(debug($alumni));
                    return $this->redirect(array('action' => 'index'));
                } else {
                    $this->Session->setFlash(__('Houve um erro no salvamento, favor tentar novamente'));
                }
            }
        }
        $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
        $this->request->data = $this->User->find('first', $options);
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->request->allowMethod('post', 'delete');
        if ($this->User->delete()) {
            $this->Session->setFlash(__('The user has been deleted.'));
        } else {
            $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
