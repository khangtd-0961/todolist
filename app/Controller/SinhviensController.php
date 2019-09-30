<?php
    App::uses('AppController', 'Controller');
    class SinhviensController extends AppController {
        public $helpers = array('Html', 'Form', 'Flash', 'Paginator');
        public $components = array('Flash', 'Paginator');
        public $name = 'Sinhviens';



        public function index() {
//			$options['joins'] = array(
//				array('table' => 'diems',
//					'alias' => 'Diem',
//					'foreignKey' => 'masinhvien',
//					'type' => 'inner',
//					'conditions' => array(
//						'Sinhvien.masinhvien = Diem.masinhvien',
//					), array('table' => 'monhocs',
//					'alias' => 'Monhoc',
//					'type' => 'inner',
//					'conditions' => array(
//						'Diem.mamonhoc= Monhoc.mamonhoc'
//					)
//				)
//				)
//			);
//			$this->Sinhvien->recursive = 3;
//			$this->set('khang',$this->Sinhvien->find('all', $options));
			$this->paginate = array(
				'limit' => 4,// mỗi page có 4 record
				'order' => array('id' => 'desc'),//giảm dần theo id
			);
			$data = $this->paginate("Sinhvien");

			$this->set("khang",$data);
        }
        public function add() {
            if ($this->request->is('post')) {
                $this->Sinhvien->create();
                if ($this->Sinhvien->save($this->request->data)) {
                    $this->Flash->success(__('Your post has been saved.'));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Flash->error(__('Unable to add your post.'));
            }
        }

		public function edit($id = null) {
			$this->Sinhvien->malop = $id;
			if (!$this->Sinhvien->exists()) {
				throw new NotFoundException(__('Invalid user'));
			}
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->Sinhvien->save($this->request->data)) {
					$this->Flash->success(__('The user has been saved'));
					return $this->redirect(array( 'action' => 'index'));
				}
				$this->Flash->error(
					__('The user could not be saved. Please, try again.')
				);
			} else {

			}
		}

        public function delete($id) {
            if ($this->request->is('get')) {
                throw new MethodNotAllowedException();
            }

            if ($this->Sinhvien->delete($id)) {
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

		function view(){
			$conditions = array();
			$data = array();
			if(!empty($this->passedArgs)){
//				if(isset($this->passedArgs['Sinhvien.ten'])) {//kiểm tra xem có tồn tại title hay không
//					$title = $this->passedArgs['Sinhvien.ten'];
//					$conditions[] = array( 'Sinhvien.ten LIKE' => "%$title%", );//điều kiện SQL
//					$data['Sinhvien']['ten'] = $title;//cho giá trị nhập vào mảng data
//				}
				if(isset($this->passedArgs['Sinhvien.masinhvien'])) {
					$description = $this->passedArgs['Sinhvien.masinhvien'];
					$conditions[] = array( "OR" => array( 'Sinhvien.masinhvien LIKE' => "%$description%" ) );
					$data['Sinhvien']['masinhvien'] = $description;
				}
				$this->paginate= array( 'limit' => 2, 'order' => array('id' => 'desc'), );
				$this->data = $data;//Giữ lại giá trị nhập vào sau khi submit
				$post = $this->paginate("Sinhvien",$conditions);
				$this->set("posts",$post);
			}
		}
		function search() {
			$url['action'] = 'view';
			foreach ($this->data as $key=>$value){

					$url[$key.'.'.$key]=$value;

			}
			$this->redirect($url, null, true);//dùng để chuyển hướng sang action view
		}
    }
?>
