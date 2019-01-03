<?php
namespace App\Controller;
/*
 * Created by: Mahipal Singh
 * @Date: 2016-03-18
 * 89itworld Software Solutions
 */

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;
use Cake\Routing\Router;
use Cake\Mailer\Email;

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
        $this->Auth->allow(['register','forgotPassword','resetPassword','subscribe','fbLogin','googleLogin','login']);
    }

    function register(){
        $this->autoRender = false;

        if(!$this->Auth->user()){
			
			 
            $user=$this->Users->newEntity();
            if($this->request->is(['post'])){

                $this->request->data['status']='1';
                $this->request->data['user_type']='user';

                $user=$this->Users->patchEntity($user,$this->request->data);

                if (!$user->errors()) {
                    if ($this->Users->save($user)) {
                        $this->Auth->setUser($user->toArray());
                         $this->_add_user_mail_chimp_list($this->request->data);
//                        return $this->redirect($this->referer());
                    }
                    echo json_encode('success');
                }else{
                    $error['email']= $user->errors('email');
                    $error['password']= $user->errors('password');
                    echo json_encode($error);
                }
            }
            // $this->set(compact('user'));
        }else{
            return $this->redirect('/');
        }
    }

    private function _add_user_mail_chimp_list($result){
        $data = [
            'email'     => $result["email"],
            'status'    => 'subscribed'
           /* 'firstname' => 'john',
            'lastname'  => 'doe'*/
        ];
        $this->_syncMailchimp($data);
     }
	
    function _syncMailchimp($data) {
               $apiKey = '874849c7b02bd87921eee99278b8cabb-us9';
               $listId = 'd3b484a87e';

               $memberId = md5(strtolower($data['email']));
               $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
               $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listId . '/members/' . $memberId;

               $json = json_encode([
                   'email_address' => $data['email'],
                   'status'        => $data['status'] // "subscribed","unsubscribed","cleaned","pending"
                   /*'merge_fields'  => [
                       'FNAME'     => $data['firstname'],
                       'LNAME'     => $data['lastname']
                   ]*/
               ]);

               $ch = curl_init($url);

               curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
               curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
               curl_setopt($ch, CURLOPT_TIMEOUT, 10);
               curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
               curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
               $result = curl_exec($ch);
               $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
               curl_close($ch);
		
               return $httpCode;
           }

      function login(){
    	$this->autoRender = false;
        if ($this->request->is(['post'])) {
            $user = $this->Auth->identify();

            if ($user && $user['status']=='active') {
                $this->Auth->setUser($user);
                echo "success";
            }else {
                if($user['status']!='active')
                    echo 'Your account is not active please contact admin';
                else
                echo 'Invalid username or password, try again';
            }
        }
    }
	function fbLogin(){
    	$this->autoRender = false;
		  $fb_id=$this->request->data['facebook_id'];
		  $fb_name=$this->request->data['name'];
		  $users=TableRegistry::get('Users');
          $user=$users->find()->where(['facebook_id'=>$fb_id])->first();
		 
		  if($user){
		  	$user=$user->toArray();
		  }else{
		     $new_users = TableRegistry::get('Users');
			 $new_user = $new_users->newEntity();
			 $fb_user_data='';
             $fb_user_data['facebook_id']= $fb_id;
			 $fb_user_data['email']= $fb_name;
			 $fb_user_data['type']= 'user';
			 $fb_user_data['status']= 'active';
			 $fb_user_data['created']= date('Y-m-d h:i:s');
			 $fb_user_data['modified']= date('Y-m-d h:i:s');
			 $save_user = $new_users->patchEntity($new_user, $fb_user_data,['validate'=>false]);
			 $new_users->save($save_user);
			 $users=TableRegistry::get('Users');
             $user=$users->find()->where(['facebook_id'=>$fb_id])->first()->toArray();
			 
		  }
		
		  $this->Auth->setUser($user);
		  //return $this->redirect('/');
		  
		  echo json_encode('success');
                
      }
	public function googleLogin(){
			$this->autoRender = false;
		  $g_id=$this->request->data['google_id'];
		  $g_name=$this->request->data['email'];
		  $users=TableRegistry::get('Users');
          $user=$users->find()->where(['google_id'=>$g_id])->first();
		 
		  if($user){
		  	$user=$user->toArray();
		  }else{
		     $new_users = TableRegistry::get('Users');
			 $new_user = $new_users->newEntity();
			 $g_user_data='';
             $g_user_data['google_id']= $g_id;
			 $g_user_data['email']= $g_name;
			 $g_user_data['type']= 'user';
			 $g_user_data['status']= 'active';
			 $g_user_data['created']= date('Y-m-d h:i:s');
			 $g_user_data['modified']= date('Y-m-d h:i:s');
			 $save_user = $new_users->patchEntity($new_user, $g_user_data,['validate'=>false]);
			 $new_users->save($save_user);
			 $users=TableRegistry::get('Users');
             $user=$users->find()->where(['google_id'=>$g_id])->first()->toArray();
			 
		  }
		
		  $this->Auth->setUser($user);
		  //return $this->redirect('/');
		  
		  echo json_encode('success');
		}
    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect($this->referer());
    }

    public function forgotPassword(){
        if($this->request->is(['post'])){
            $email=$this->request->data['email'];
            $users=TableRegistry::get('Users');
            $user=$users->find()->where(['email'=>$email])->first();
            if($user){
                $activation_key=md5($user->email.time());
                $user=$users->patchEntity($user,['activation_key'=>$activation_key]);
                $users->save($user);
                $mail=new Email();
                $mail->config('Smtp');
                $mail->to($user->email);
                $mail->subject('Reset Password');
                $mail->emailFormat('html');
                $mail->send('To reset your password <a href="'.Router::url(['controller'=>'Users','action'=>'resetPassword',$activation_key],true).'">Click Here</a>');
                $this->Flash->success('Please check your email');
            }
        }
    }

	 function subscribe(){
		$this->autoRender = false;	
		$UserSubscribesTable = TableRegistry::get('UserSubscribes');
        $user = $UserSubscribesTable->newEntity();
            if($this->request->is(['post'])){
            	$user = $UserSubscribesTable->patchEntity($user,$this->request->data);
                
                if (!$user->errors()) {
                    if ($UserSubscribesTable->save($user)) {
                         $this->_add_user_mail_chimp_list($this->request->data);
                    }
                    echo 'success';
                }else{
                	$error['email'] = $user->errors('email');
                    echo json_encode($error);
                }
           }	 
	}
	
	
}
