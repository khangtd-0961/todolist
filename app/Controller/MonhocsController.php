<?php
App::uses('AppController', 'Controller');
class MonhocsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash', 'Paginator');
	public $components = array('Flash', 'Paginator');
	public $name = 'Monhocs';



	public function index() {
		$this->paginate = array(
			'limit' => 4,// mỗi page có 4 record
			'order' => array('id' => 'desc'),//giảm dần theo id
		);
		$data = $this->paginate("Monhoc");

		$this->set("monhoc",$data);

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
			$this->Monhoc->create();
			if ($this->Monhoc->save($this->request->data)) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add your post.'));
		}
	}

	public function edit($id = NULL){

		$post = $this->Monhoc->findById($id);

		if($this->request->is(array('post', 'put'))){
			$this->Monhoc->id = $id;
			if( $this->Monhoc->save($this->request->data)){
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

		if ($this->Monhoc->delete($id)) {
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
