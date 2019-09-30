<?php
App::uses('AppController', 'Controller');
class DiemsController extends AppController
{
	public $helpers = array('Html', 'Form', 'Flash', 'Paginator');
	public $components = array('Flash', 'Paginator');
	public $name = 'Diems';

	public function index(){
		$this->paginate = array(
			'limit' => 4,// mỗi page có 4 record
			'order' => array('id' => 'desc'),//giảm dần theo id
		);
		$data = $this->paginate("Diem");

		$this->set("diem",$data);
	}

	public function add(){
		if($this->request->is('post')){
			$this->Diem->create();
			if($this->Diem->save($this->request->data)){
				$this->Flash->succes(__('success'));
				return $this->redirect(array('action'=>'index'));
			}
			$this->Flash->error(__('Unable to add your diem.'));
		}
	}

	public function edit($id = NULL){

		$post = $this->Diem->findById($id);

		if($this->request->is(array('post', 'put'))){
			$this->Diem->id = $id;
			if( $this->Diem->save($this->request->data)){
				$this->Flash->success(__('Your Post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable too add your post.'));
		}

		 if(!$this->request->data){
		     $this->request->data = $post;
		 }
	}

	public function delete($id = null) {
		// Prior to 2.5 use
		// $this->request->onlyAllow('post');

		$this->request->allowMethod('post');
		$this->Diem->id = $id;
		if (!$this->Diem->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->Diem->delete()) {
			$this->Flash->success(__('User deleted'));
			return $this->redirect(array('action' => 'index'));
		}
		$this->Flash->error(__('User was not deleted'));
		return $this->redirect(array('action' => 'index'));
	}
}
?>
