<?php
namespace App\Controller;
use App\Controller\AppController;
use Cake\Mailer\Email;

class BlogsController extends AppController
{
    public function initialize()
    {
        parent::initialize(); // TODO: Change the autogenerated stub
        $this->Auth->allow(['index','cochellaCalifornia','afrikaburnSouthAfrica','lollapaloozaChicago','palioSiena','snowbombingAustria']);
    }

    public function index(){

    }

    public function blogDetail(){

    }

    public function cochellaCalifornia(){
        $this->viewBuilder()->layout("default");
    }
    public function afrikaburnSouthAfrica(){

        }
    public function lollapaloozaChicago(){

        }
    public function palioSiena(){

        }
    public function snowbombingAustria(){

        }
}
