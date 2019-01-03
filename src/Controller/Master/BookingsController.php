<?php
namespace App\Controller\Master;
/*
 * Created by: Mahipal Singh
 * @Date: 2016-03-15
 * 89itworld Software Solutions
 */

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Class BookingsController
 * Created By Sainesh Mamgain
 */
class BookingsController extends AppController{

    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('admin');
        if($this->Auth->user('user_type')=='user'){
            $this->redirect('/');
        }
    }

    public function index(){
        if($this->Auth->user('user_type')=='owner'){
               $this->set('bookings',$this->paginate($this->Bookings->find()->contain(['Addresses'=>['States','Restaurants']])->where(['bookings.owner_id'=>$this->Auth->user('id')])));
        }else{
            $this->set('bookings',$this->paginate($this->Bookings->find()->contain(['Addresses'=>['States','Restaurants']])));
        }
    }

    /**
     * @param null $id
     * @param null $status
     * @return \Cake\Network\Response|null
     */
    public function StatusUpdate($id=null,$status=null){
        $this->autoRender = false;
        if(!empty($id)){
            $bookings = $this->Bookings->find()->where(['id'=>$id])->first();

            $bookings = $this->Bookings->patchEntity($bookings,['status'=>$status]);
            if($this->Bookings->save($bookings)){
                $this->Flash->success('Changed Status Successfully');
            }else{
                $this->Flash->error('Some error Occur!');
            }
            return $this->redirect($this->referer());
        }
    }
    /**
     * @param null $id
     * @return \Cake\Network\Response|null
     */
    public function delete($id=null){
        $this->autoRender= false;
        if(!empty($id)){
            $booking = $this->Bookings->find()->where(['id'=>$id])->first();
            if($booking) {
                $this->Bookings->delete($booking);
                $this->Flash->success('Deleted successfully');
                return $this->redirect($this->referer());
            }
        }
    }

}