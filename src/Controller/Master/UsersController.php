<?php
namespace App\Controller\Master;

/*
 * Created by: Sainesh Mamgain
 * @Date: 2016-03-02
 * 89itworld Software Solutions
 */

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\I18n\Time;

class UsersController extends AppController
{

    public function initialize()
    {
        parent::initialize();
		 $this->Auth->config([
					'authenticate'=>[
						'Form'=>[
							'fields' => [
								'username' => 'email',
								'password' => 'password'
							]
						]
					]
				]);

        $this->loadComponent('Paginator');
      /*  $this->loadComponent('Auth', [

            'loginAction' => [
                'controller' => 'Users',
               'action' => 'login'
            ],
            'loginRedirect' => [
                'controller' => 'Users',
                'action' => 'index',
            ],
            'logoutRedirect' => [
               'controller' => 'Users',
                'action' => 'login',
           ],
           'Authenticate' => [
                'Form' => [
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password',
                    ],
                ],
            ],
       ]);*/

        $this->Auth->allow(['login','index','add','edit']);
//        if ($this->Auth->user('role') != 'admin' && $this->request->params['action'] != 'login') {
//            $this->redirect('/');
//        }
        /*$this->Auth->config([
            'authenticate'=>[
                'Form'=>[
                    'fields' => [
                        'username' => 'email',
                        'password' => 'password'
                    ]
                ]
            ]
        ]);
        $this->Auth->allow(['register','forgotPassword','resetPassword','login']);
        $this->viewBuilder()->layout('admin');
        if($this->Auth->user('user_type')=='owner'){
            return $this->redirect(['controller'=>'Restaurants','action'=>'index','prefix'=>'master']);
        }

        if($this->Auth->user('user_type')!='admin'){
            return $this->redirect(['controller'=>'Users','action'=>'login','prefix'=>'master']);
        }*/
    }



    /*
   * Before render handler.
   *
   * @param \Cake\Event\Event $event The event.
   * @return void
   */
//    public function beforeRender(Event $event)
//    {
//        $this->viewBuilder()->layout('Admin')->className('View');
//    }

    public function index()
    {
        return $this->redirect(['controller'=>'Tours','action'=>'index']);
    }

   public function login(){
        $this->viewBuilder()->layout('ajax');

            if (!$this->Auth->user('id')) {
                if ($this->request->is('post')) {

                    //pr($this->request->data);
                    $user = $this->Auth->identify();
                   // pr($this->request);
//                    debug($user);die;
                    if ($user) {
//                        pr($user); die;
                        if ($user['user_type'] == 'admin') {
                            $this->Auth->setUser($user);
                            $this->Flash->success(__('Welcome ' . ucfirst($user['fname'])));
                            return $this->redirect(['controller' => 'Users', 'action' => 'index']);
                        } else {
                            $this->Flash->error('Invalid Email or Password', ['key' => 'error_msg']);
                        }
                    } else {
                        
                        $this->Flash->error('Invalid Email or Password', ['key' => 'error_msg']);

                    }
                }
            } else {
                return $this->redirect(['controller' => 'Users', 'action' => 'index']);
            }
        $this->set(compact('user'));
    }

 public function  userListing(){
        $this->viewBuilder()->layout('admin')->className('View');
        $users = TableRegistry::get('Users');
        $this->set('users', $this->paginate($users->find()->where(['user_type'=>'user'])->order(['created' => 'DESC'])));
        $this->render('index');
    }

    public function delete($id = null){
        $users = TableRegistry::get('Users');
        $this->autoRender = false;
        if (!empty($id)) {
            $user = $users->find()->where(['id' => $id])->first();
            if (!empty($user)) {
                $users->delete($user);
                $this->Flash->success('User has been deleted', ['key' => 'positive']);
            }
        }
        return $this->redirect($this->referer());
    }

    public function changeStatus($id = null, $status = null)
    {
        if (!empty($id) && !empty($status)) {
            $user = $this->Users->find()->where(['id' => $id])->first();
            if ($user) {
                $user = $this->Users->patchEntity($user, ['status' => $status]);
                $user_id=$this->Users->save($user);
                if($user_id)
                  $this->Flash->success('User status changed', ['key' => 'positive']);
            }
        }
        return $this->redirect($this->referer());
    }
    public function add(){
        $this->viewBuilder()->layout('admin')->className('View');
        $users = TableRegistry::get('Users');
        $user = $users->newEntity();
        if ($this->request->is(['post'])) {
            $data = $this->request->data;
            $user->email = $data['email'];
            $user->status = $data['status'];
            $user->password = $data['password'];
            $user->user_type = $data['user_type'];
            $user->created =date('Y-m-d h:s:i');
            $user->modified = date('Y-m-d h:s:i');
            $errors=$users->patchEntity($user,$this->request->data);
            $error_user=$errors->errors();
            if (!$errors->errors()) {
                $user_id = $users->save($user);
                if ($user_id)
                    $this->Flash->success('User has been added', ['key' => 'positive']);
            }else{
                $errors='';

                foreach ($error_user as $key=>$err){
                    foreach ($err as $e)
                      $errors[$key]=$e;
                }

                $this->set('errors',$errors);
            }
        }
        $this->set(compact('users'));
    }

    public function edit($id=null){
        $this->viewBuilder()->layout('admin')->className('View');
        if (!empty($id)) {
            $users = TableRegistry::get('Users');

            $user =$users->find()->where(['id' => $id])->first();

            if ($this->request->is(['post', 'put'])) {
                $data = $this->request->data;
                $user->email = $data['email'];
                $user->status = $data['status'];
                $user->password = $data['password'];
                $user->user_type = $data['user_type'];
                $user->modified = date('Y-m-d h:s:i');
                $errors=$users->patchEntity($user,$this->request->data);
                $error_user=$errors->errors();
                if (!$errors->errors()) {
                    $user_id = $users->save($user);
                    if ($user_id)
                        $this->Flash->success('User has been updated', ['key' => 'positive']);
                }else{
                    $errors='';

                    foreach ($error_user as $key=>$err){
                        foreach ($err as $e)
                            $errors[$key]=$e;
                    }

                    $this->set('errors',$errors);
                }
            }
            $this->set(compact('user'));
        }
    }




}