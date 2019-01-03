<?php
namespace App\Controller\Master;
/*
 * Created by: Sainesh Mamgain
 * @Date: 2016-03-03
 * 89itworld Software Solutions
 */
use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * @property bool|object Categories
 */
class CategoriesController extends AppController{

	public function initialize()
	{
		parent::initialize();
		$this->viewBuilder()->layout('admin');
		if($this->Auth->user('user_type')!='admin'){
			$this->redirect('/');
		}
	}

	public function index(){
		$this->set('categories',$this->Categories->find());
	}

	/**
	 * @return \Cake\Network\Response|null
	 */
	public function add(){
		$category=$this->Categories->newEntity();
		if($this->request->is(['post'])){
			$allowed_extensions=['jpg','jpeg','png','gif','bmp'];
			if(!empty($this->request->data['image']['tmp_name'])){
				$image=$this->request->data['image'];
				$ext=explode('/',$image['type']);
				$ext=mb_strtolower($ext['1']);
				if(in_array($ext,$allowed_extensions)){
					$image['name']='IMG'.time().'.'.$ext;
					if(move_uploaded_file($image['tmp_name'],WWW_ROOT.'img'.DS.'categories'.DS.$image['name'])){
						$this->request->data['image']=$image['name'];
						$category=$this->Categories->patchEntity($category,$this->request->data);
						if($this->Categories->save($category)){
							$this->Flash->success('Added Successfully');
							return $this->redirect(['controller'=>'Categories','action'=>'index']);
						}
					}
				}
			}
			$this->Flash->error('Some Error Occurred');
		}
		$this->set(compact('category'));
	}

	/**
	 * @param null $id
	 * @return \Cake\Network\Response|null
	 */
	public function edit($id=null){
		if(!empty($id)){
			$category=$this->Categories->find()->where(['id'=>$id])->first();
			if($this->request->is(['post','put'])){
				$allowed_extensions=['jpg','jpeg','png','gif','bmp'];
				if(!empty($this->request->data['image']['tmp_name'])){
					$image=$this->request->data['image'];
					$ext=explode('/',$image['type']);
					$ext=mb_strtolower($ext['1']);
					if(in_array($ext,$allowed_extensions)){
						$image['name']='IMG'.time().'.'.$ext;
						if(move_uploaded_file($image['tmp_name'],WWW_ROOT.'img'.DS.'categories'.DS.$image['name'])){
							$this->request->data['image']=$image['name'];

						}
					}
				}else{
					unset($this->request->data['image']);
				}
				$category=$this->Categories->patchEntity($category,$this->request->data);
				if($this->Categories->save($category)){
					$this->Flash->success('Added Successfully');
					return $this->redirect($this->referer());
				}
			}
			$this->set(compact('category'));
		}else{
			return $this->redirect($this->referer());
		}
	}

	/**
	 * @param null $id
	 * @return \Cake\Network\Response|null
	 */
	public function delete($id=null){
		$this->autoRender=false;
		if(!empty($id)){
			$category=$this->Categories->find()->where(['id'=>$id])->first();
			if($category){
				$this->Categories->delete($category);
				if(file_exists(WWW_ROOT.DS.'img/categories/'.$category->image)){
					unlink(WWW_ROOT.DS.'img/categories/'.$category->image);
				}
				return $this->redirect($this->referer());
			}
		}
	}

	/**
	 * @param null $id
	 * @return \Cake\Network\Response|null
	 */
	public function StatusUpdate($id=null){
		$this->autoRender=false;
		$category=$this->Categories->find()->where(['id'=>$id])->first();
		$category=$this->Categories->patchEntity($category,['status' =>($category['status']==1)?2:1]);
		if($this->Categories->save($category)){
			if($category['status']==2){
				$postTable = TableRegistry::get('Posts');
				$post = $postTable->find()->where(['category_id'=>$id]);

				foreach($post as $posts){
					$posts->status = 2;
					$postTable->save($posts);
				}
			}
			$this->Flash->success('Updated Successfully');
			return $this->redirect($this->referer());
		}
	}
}