<?php
class UsersController extends AppController
{
var $uses = array('User');
var $layout = "admin";
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('add', 'logout');
	}

public function logout(){
$this->redirect($this->Auth->logout());
}
public function login(){
    if($this->Auth->user()){
    return $this->redirect($this->Auth->redirectUrl());
    }
    if($this->request->is('post')){
    if($this->Auth->login()){
    return $this->redirect($this->Auth->redirectUrl());
    }else{
    $this->Session->setFlash('Username hoặc pass sai');
    }
    }
    }
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->findById($id));
	}

	public function add(){
		$this->set('title_for_layout', 'Add user');
		if($this->request->is('post') || $this->request->is('put')){
			$now = date('Y:m:d H:i:s');
			$this->User->set(array('date_created'=>$now));
			$this->User->set(array('date_updated'=>$now));
			if($this->User->save($this->request->data)){
				$this->Session->setFlash('Success','default',array('class'=>"alert alert-success"));
				$this->redirect(array('action'=>'index'));
			}
		}
	}

	public function edit($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved'));
				return $this->redirect(array('controller' => 'users', 'action' => 'index'));
			}
			$this->Flash->error(
				__('The user could not be saved. Please, try again.')
			);
		} else {
			$this->request->data = $this->User->findById($id);
			unset($this->request->data['User']['password']);
		}
	}

	public function delete($id = null) {
		// Prior to 2.5 use
		// $this->request->onlyAllow('post');

		$this->request->allowMethod('post');
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Flash->success(__('User deleted'));
			return $this->redirect(array('controller' => 'users', 'action' => 'index'));
		}
		$this->Flash->error(__('User was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}

}
