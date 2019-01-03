<?php
namespace App\Controller\Component;

use Cake\Controller\Component;

class EanComponent extends Component{

    protected $host;
    protected $key;
    protected $cid;
    protected $minorRev;
    protected $locale;
    protected $sig;

    public function initialize(array $config)
    {
        parent::initialize($config); // TODO: Change the autogenerated stub
        $this->key='7v3601hg72liit6tii2nreivc4';
        $this->host='https://book.api.ean.com/';
        $this->cid='458081';
        $this->minorRev='99';
        $this->locale='en_US';
        $secret = 's3l8iuvgibk0';
        $timestamp = gmdate('U'); // 1427233130 (Tue, 24 Mar 2015 21:38:50 +0000)
        $this->sig= md5($this->key . $secret . $timestamp);
    }

    public function getCurlData($path, $xml){

        $url=  $this->host. $path . "?apiKey={$this->key}&cid={$this->cid}&minorRev={$this->minorRev}&sig={$this->sig}"
            . "&locale={$this->locale}"
            . "&xml={$xml}";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept:application/json'));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
}
?>