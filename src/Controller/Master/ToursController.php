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

class ToursController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Paginator');
       // $this->Auth->allow(['index','add','edit','delete','updateTours','updateFeatured']);
    }

    public function index()
    {
        $this->viewBuilder()->layout('admin')->className('View');
        $tours = TableRegistry::get('Tours');
        $this->set('tours', $this->paginate($tours->find()));
    }

    public function add()
    {
        $this->viewBuilder()->layout('admin')->className('View');
        $tours = TableRegistry::get('Tours');
        $tour = $tours->newEntity();

        //$tour=$this->Tours->newEntity();
        if ($this->request->is(['post'])) {
            /* print_r($this->request->data);exit;*/
            $data = $this->request->data;
            $tour->title = $data['title'];
            $tour->description = $data['description'];
            $tour->price = $data['price'];
            $tour->time = $data['time'];
            $tour->city = $data['city'];
            $date = new \DateTime($data['start_date']['year'] . $data['start_date']['month'] . $data['start_date']['day']);
            $start_date = $date->format('Y-m-d H:i:s');
            $tour->start_date = $start_date;
            $date = new \DateTime($data['end_date']['year'] . $data['end_date']['month'] . $data['end_date']['day']);
            $end_date = $date->format('Y-m-d H:i:s');
            $tour->end_date = $end_date;
            $tour->user_id = 10;
            $status='';

            switch($data['status']){
                case 'active':
                    $status=1;
                    break;
                case 'inactive':
                    $status=0;
                    break;
                case 'blocked':
                    $status=2;
                    break;
            }
            $tour->status = $status;
            $tour->created = '1';
            $file = isset($data['name']) ? $data['name'] : '';
            $tour_id = '';
            if (isset($file)) {

                $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                $arr_ext = array('jpg', 'jpeg', 'gif' ,'png');
                if (in_array($ext, $arr_ext)) {

                    $tour_id = $tours->save($tour);
                }else{
                    $this->set(array('image_error'=>'error'));
                }
            }else{
                $tour_id = $tours->save($tour);
            }
            if($tour_id){
                if (isset($file)) {

                    $file = $data['name'];
                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                    //only process if the extension is valid
                    if (in_array($ext, $arr_ext)) {
                        $file['name'] = round(microtime(true)) . '.' . $file['name'];
                        move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' . DS . 'tour_image' . DS . $file['name']);
                        $temp_dir = WWW_ROOT . 'img' . DS . 'tour_image';
                        $this->resize_img($temp_dir, $temp_dir, $file['name'], 500);
                        //Saving the image name into TourImage table

                        $images = TableRegistry::get('TourImages');
                        $tour_image = $images->newEntity();
                        $tour_image->logo = $file['name'];
                        $tour_image->tour_id = $tour_id->id;
                        $tour_image->created = '1';
                        $images->save($tour_image);
                        return $this->redirect(['controller'=>'Users','action'=>'index','prefix'=>'master']);
                    }
                }
                return $this->redirect(['controller'=>'Users','action'=>'index','prefix'=>'master']);
            }
        }
        $this->set(compact('tour'));
    }

    public function edit($id = null)
    {
        $this->viewBuilder()->layout('Admin')->className('View');

        if (!empty($id)) {
            $tours = TableRegistry::get('Tours');
            $tour =$tours->find()->where(['id' => $id])->first();
            if ($this->request->is(['post', 'put'])) {
                $data = $this->request->data;
                $tour->title = $data['title'];
                $tour->description = $data['description'];
                $tour->price = $data['price'];
                $tour->time = $data['time'];
                $tour->city = $data['city'];
                $date = new \DateTime($data['start_date']['year'] . $data['start_date']['month'] . $data['start_date']['day']);
                $start_date = $date->format('Y-m-d H:i:s');
                $tour->start_date = $start_date;
                $date = new \DateTime($data['end_date']['year'] . $data['end_date']['month'] . $data['end_date']['day']);
                $end_date = $date->format('Y-m-d H:i:s');
                $tour->end_date = $end_date;
                $tour->user_id = 10;
                $status = '';

                switch ($data['status']) {
                    case 'active':
                        $status = 1;
                        break;
                    case 'inactive':
                        $status = 0;
                        break;
                    case 'blocked':
                        $status = 2;
                        break;
                }
                $tour->status = $status;
                $tour->created = '1';
                $file = isset($data['name']) ? $data['name'] : '';
                $tour_id = '';
                if ($file['name'] != '') {

                    $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                    $arr_ext = array('jpg', 'jpeg', 'gif');
                    if (in_array($ext, $arr_ext)) {

                        $tour_id = $tours->save($tour);
                    } else {
                        $this->set(array('image_error' => 'error'));
                    }
                } else {
                    $tour_id = $tours->save($tour);
                }
                if ($tour_id) {

                    if (isset($file)) {

                        $file = $data['name'];
                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                        //only process if the extension is valid
                        if (in_array($ext, $arr_ext)) {
                            $file['name'] = round(microtime(true)) . '.' . $file['name'];
                            move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img' . DS . 'tour_image' . DS . $file['name']);
                            $temp_dir = WWW_ROOT . 'img' . DS . 'tour_image';
                            $this->resize_img($temp_dir, $temp_dir, $file['name'], 500);
                            //Saving the image name into TourImage table
                            $images = TableRegistry::get('TourImages');
                            $tour_image= $images->find()->where(['tour_id'=>$tour_id->id])->first();
                            $tour_image->logo = $file['name'];
                            $tour_image->tour_id = $tour_id->id;
                            $tour_image->created = '1';
                            $images->save($tour_image);
                            return $this->redirect(['controller' => 'Users', 'action' => 'index', 'prefix' => 'master']);
                        }
                    }
                      return $this->redirect(['controller' => 'Users', 'action' => 'index', 'prefix' => 'master']);
                }
            }
            $this->set(compact('tour'));
        }
    }

    public function delete($id = null)
    {
        $tours = TableRegistry::get('Tours');
        $this->autoRender = false;
        if (!empty($id)) {
            $user = $tours->find()->where(['id' => $id])->first();
            if (!empty($user)) {
                $tours->delete($user);
            }
        }
        return $this->redirect($this->referer());
    }

    public function changeStatus($id = null, $status = null)
    {
        if (!empty($id) && !empty($status)) {
            $tour = $this->Tours->find()->where(['id' => $id])->first();
            if ($tour) {
                $tour = $this->Tours->patchEntity($tour, ['status' => $status]);
                $this->Tours->save($tour);
            }
        }
        return $this->redirect($this->referer());
    }

    /*
     * Author:Yasar
     * Date:22-Apr-2016
     * Description:Function used to resize images
     * */

    private function resize_img($dir_in, $dir_out, $imedat='defaultname.jpg', $max=250) {

        $img = $dir_in . '/' . $imedat;
        // $extension = array_pop(explode('.', $imedat));
        $extension = substr(strtolower(strrchr($imedat, '.')), 1);
        switch ($extension){

            case 'jpg':
            case 'jpeg':
                $image = ImageCreateFromJPEG($img);
                break;

            case 'png':
                $image = ImageCreateFromPNG($img);
                break;

            default:
                $image = false;
        }


        if(!$image){
            // not valid img stop processing
            return false;
        }

        $vis = imagesy($image);
        $sir = imagesx($image);

        if(($vis < $max) && ($sir < $max)) {
            $nvis=$vis; $nsir=$sir;
        } else {
            if($vis > $sir) { $nvis=$max; $nsir=($sir*$max)/$vis;}
            elseif($vis < $sir) { $nvis=($max*$vis)/$sir; $nsir=$max;}
            else { $nvis=$max; $nsir=$max;}
        }

        $out = ImageCreateTrueColor($nsir,$nvis);
        ImageCopyResampled($out, $image, 0, 0, 0, 0, $nsir, $nvis, $sir, $vis);

        switch ($extension){

            case 'jpg':
            case 'jpeg':
                imageinterlace($out ,1);
                ImageJPEG($out, $dir_out . '/' . $imedat, 75);
                break;

            case 'png':
                ImagePNG($out, $dir_out . '/' . $imedat);
                break;

            default:
                $out = false;
        }

        if(!$out){
            return false;
        }

        ImageDestroy($image);
        ImageDestroy($out);

        return true;
    }

    /*
     * @params $id null
     * @params @featured null
     * */

    public function updateFeatured($id = null, $featured = null){
        $this->autoRender = false;
        if (!empty($id) && !empty($featured)) {
            $tour = $this->Tours->find()->where(['id' => $id])->first();
            if ($tour) {
                $tour = $this->Tours->patchEntity($tour, ['featured' => $featured]);
                $this->Tours->save($tour);
            }
        }
        return $this->redirect($this->referer());
    }
    public function updateTours(){

        $url = "https://api.rezdy.com/v1/products/marketplace?limit=150&offset=0&apiKey=8fd549d9b96547be8dc64b1a09c1a5c5";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:application/json'));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        $dataArray = json_decode($data, true);
        if(@$dataArray['requestStatus']['success']==1){
            $tourImagesTable = TableRegistry::get('TourImages');
            foreach($dataArray['products'] as $tour){
                $time = explode('Tour Duration',$tour['description']);
               if(@$time['1']){
                   $time= explode('(' , $time['1']);
                   $time= strip_tags(str_replace(')',"" , $time['1']));
               }
                $address = explode('/', $tour['timezone']);
                $country = $address['0'];
                $city = $address['1'];

              $tours = $this->Tours->newEntity();
                $tourDetails['title']= $tour['name'];
                $tourDetails['description']= $tour['description'];
                $tourDetails['price']= @$tour['advertisedPrice'];
                $tourDetails['start_date']= $tour['dateUpdated'];
                $tourDetails['time']= $time;
                $tourDetails['city']= $city;
                $tourDetails['country']= $country;
                $tourDetails['productCode']= $tour['productCode'];
                $tourDetails['supplierId']= $tour['supplierId'];
                $tourDetails['supplierName']= $tour['supplierName'];
                $tourDetails['priceOptions']= (@$tour['priceOptions'])?json_encode($tour['priceOptions']):'';
                $tourDetails['tour_duration']= $tour['durationMinutes'];
                $tourDetails['extra']= (@$tour['extras'])?json_encode($tour['extras']):'';
                $tourDetails['bookingFields']= (@$tour['bookingFields'])?json_encode($tour['bookingFields']):'';
                $tourDetails['lat']= $tour['latitude'];
                $tourDetails['lang']= $tour['longitude'];
                $tourDetails['featured']= 2;
                $tourDetails['status']= 1;

                $tours = $this->Tours->patchEntity($tours, $tourDetails);
//                debug($tours); die;
                if($this->Tours->save($tours)){
                    foreach($tour['images'] as $img){

                        $tourImage = $tourImagesTable->newEntity();
                        $image['tour_id']= $tours->id;
                        $image['logo']= $img['thumbnailUrl'];
                        $image['largeLogo']= $img['itemUrl'];
                        $tourImage = $tourImagesTable->patchEntity($tourImage,$image);

//                        debug($tourImage); die;
                        $tourImagesTable->save($tourImage);
                     }
                }
           }
            return $this->redirect($this->referer());
        }
    }

    function checkTours(){
        $url = "https://api.rezdy.com/v1/products/marketplace?limit=150&offset=0&apiKey=8fd549d9b96547be8dc64b1a09c1a5c5";
               $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $url);
               curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
               curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept:application/json'));
               curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
               $data = curl_exec($ch);
               curl_close($ch);
               $dataArray = json_decode($data, true);
        echo "<pre>";print_r($dataArray);die;
    }
}