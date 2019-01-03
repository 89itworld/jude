<?php
namespace App\Controller\Master;

/*
 * Created by: Sainesh Mamgain
 * @Date: 2016-03-02
 * 89itworld Software Solutions
 */

use App\Controller\AppController;
use Cake\ORM\TableRegistry;


class CrmsController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');

    }

    public function index(){
        $this->viewBuilder()->layout('admin')->className('View');
        $contents = TableRegistry::get('Contents');
        $this->set('contents', $this->paginate($contents->find()));
        
    }
    public function add(){
        $this->viewBuilder()->layout('admin')->className('View');
        $contents = TableRegistry::get('Contents');
        $content = $contents->newEntity();
        if ($this->request->is(['post'])) {
            //echo "<pre>";
           // print_r($this->request);exit;
            $data = $this->request->data;
            $content->title = $data['title'];
            $content->description = $data['description'];
            $content->link_title = $data['link_title'];
            $content->meta_description = $data['meta_description'];
            $content->meta_keywords = $data['meta_keywords'];
            $content->status = $data['status'];
            $content->created =date('Y-m-d h:s:i');
            $content->modified = date('Y-m-d h:s:i');
            //pr($content);exit;
            $content_id = $contents->save($content);
            if($content_id)
              $this->Flash->success('Page has been added', ['key' => 'positive']);
        }
        $this->set(compact('contents'));
    }

    public function edit($id = null){

        $this->viewBuilder()->layout('admin')->className('View');

        if (!empty($id)) {
            $contents = TableRegistry::get('Contents');
            $content =$contents->find()->where(['id' => $id])->first();

            if ($this->request->is(['post', 'put'])) {
                $data = $this->request->data;
                $content->title = $data['title'];
                $content->description = $data['description'];
                $content->link_title = $data['link_title'];
                $content->meta_description = $data['meta_description'];
                $content->meta_keywords = $data['meta_keywords'];
                $content->status = $data['status'];
                $content->modified = date('Y-m-d h:s:i');
                $content_id = $contents->save($content);
                if($content_id)
                $this->Flash->success('Content has been updated', ['key' => 'positive']);
            }
            $this->set(compact('content'));
        }
    }

    public function changeStatus($id = null, $status = null)
    {
        if (!empty($id) && !empty($status)) {
            $contents = TableRegistry::get('Contents');
            $content =$contents->find()->where(['id' => $id])->first();

            if ($content) {
                $content->status = $status;
                if($contents->save($content))
                  $this->Flash->success('Page status has been changed', ['key' => 'positive']);

            }
        }
        return $this->redirect($this->referer());
    }

    public function delete($id = null)
    {
        $contents = TableRegistry::get('Contents');
        $this->autoRender = false;
        if (!empty($id)) {
            $content = $contents->find()->where(['id' => $id])->first();
            if (!empty($content)) {
                $contents->delete($content);
                $this->Flash->success('Page has been deleted', ['key' => 'positive']);
            }
        }
        return $this->redirect($this->referer());
    }

}