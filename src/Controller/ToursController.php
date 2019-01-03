<?php
namespace App\Controller;

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
        $this->Auth->allow(['index','tourDetails']);
        $this->viewBuilder()->layout('view_page');
    }

    public function index()
    {
        $session = $this->request->session();
            if($this->request->is(['post'])){
                $session->write('search_tour',$this->request->data);
                $this->redirect(['controller'=>'Tours','action'=>'index']);
            }
        $destination = $session->read('search_tour')['destination'];
        $title = $session->read('search_tour')['title'];
        $country = $city = $state = "";

        if(!empty($destination)){
            $address = str_replace(" ", "+", "$destination");
            $url = "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false";
            $result = file_get_contents("$url");
            $json = json_decode($result);
            foreach ($json->results as $result) {
                foreach($result->address_components as $addressPart) {
                    if((in_array('locality', $addressPart->types)) && (in_array('political', $addressPart->types)))
                        $city = $addressPart->long_name;
                    else if((in_array('administrative_area_level_1', $addressPart->types)) && (in_array('political', $addressPart->types)))
                        $state = $addressPart->long_name;
                    else if((in_array('country', $addressPart->types)) && (in_array('political', $addressPart->types)))
                        $country = $addressPart->long_name;
                }
            }
        }
        if($country != "" && $title != ""){
            $search_title = "Search Result for ".$title." and ". $destination;
            $condition = "title LIKE '%". $title ."%' AND (city = '".@$city."' OR country = '".$country. "')";
            $tour = $this->Tours->find()->contain('TourImages')->where($condition);

        }elseif($title != "" && $country == ""){
            $search_title = "Search Result for ".$title;
            $tour = $this->Tours->find()->contain('TourImages')->where(['Tours.title LIKE'=>'%'.$title.'%']);

        }elseif($title == "" && $country != ""){
            $search_title = "Search Result for ".$destination;
            $condition = "city = '".@$city."' OR country = '".$country. "'";
            $tour = $this->Tours->find('all',['limit'=>'28'])->contain('TourImages')->where($condition);

        }else{
            $tour = $this->Tours->find('all',['limit'=>'20'])->contain('TourImages')->where(['city'=>'Brisbane']);
            $search_title = "All Tours";
        }
        $this->set(compact('tour'));
        $this->set('search',$search_title);
    }

    /**
     * @param $id null
     */
    public function tourDetails($id=null){
        $this->set('tour', $this->Tours->find()->contain(['TourImages'])->where(['Tours.productCode'=>$id])->first());
        $this->set('tourlist', $this->Tours->find('all', ['limit' => 4])->contain('TourImages')->where(['city'=>'Brisbane']));
    }

}