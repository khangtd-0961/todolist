<?php
App::uses('AppController', 'Controller');
class LopsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash', 'Paginator');
	public $components = array('Flash', 'Paginator');
	public $name = 'Lops';



	public function index() {
//		$this->paginate = array(
//			'limit' => 4,// mỗi page có 4 record
//			'order' => array('id' => 'desc'),//giảm dần theo id
//		);
			$data = $this->paginate("Lop");

		$this->set("lop",$data);
		// $this->set('sinhvien', $this->Sinhvien->find('all'));
//			$this->set('sinhvien', 'Sinhvien');
//			$data = $this->Story->find('all', array(
//				'conditions'=>array('status'=>1),
//				'order' =>array('updated'=>'desc','Story.name'=>'asc'),
//				'recursive' => 0
//			));
//			$this->set('data', $data);
	}
	public function add() {
		if ($this->request->is('post')) {
			$this->Lop->create();
			if ($this->Lop->save($this->request->data)) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add your post.'));
		}
	}

	public function edit($id = NULL){

		$post = $this->Lop->findById($id);

		if($this->request->is(array('post', 'put'))){
			$this->Lop->malop = $id;
			if( $this->Lop->save($this->request->data)){
				$this->Flash->success(__('Your Post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable too add your post.'));
		}

		// if(!$this->request->data){
		//     $this->request->data = $post;
		// }
	}

	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Lop->delete($id)) {
			$this->Flash->success(
				__('The post with id: %s has been deleted.', h($id))
			);
		} else {
			$this->Flash->error(
				__('The post with id: %s could not be deleted.', h($id))
			);
		}

		return $this->redirect(array('action' => 'index'));
	}

}
?>
