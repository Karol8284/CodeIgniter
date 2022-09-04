<?php
namespace App\Controllers\Bank\Login;
use App\Controllers\BaseController;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Database;
use CodeIgniter\Model;
use Config\App;

class CreateUser extends BaseController
{
    public function index()
    {
        $dataBaner = [
            'banerTitle' => 'CreateUser',
            'link1' => ''
        ];
        $dataBaner['link'] = [
            'logo' => '',
            'link1' => '',
            'link2' => '',
            'link2List' =>  [
                'offer1' => 'oferta1',
                'offer2' => 'oferta2',
                'offer3' => 'oferta3',
            ],
            'link3' => '',
            'link4' => '',
        ];
        $dataBaner['text'] = [
            'logo' => 'Home',
            'text1' => 'Home',
            'text2' => 'Offer',
            'text2List' =>  [
                'offer1' => 'oferta1',
                'offer2' => 'oferta2',
                'offer3' => 'oferta3',
            ],
            'text3' => 'Contact',
            'text4' => 'Login',
        ];
        // <*>------------------------------------------<*>

        echo view('Bank/Template/Baner', $dataBaner);
        echo view('Bank/Login/loginToClientAccount');
        echo view('Bank/Template/Footer');
    }
}