<?php
namespace App\Controllers\Bank\Login;
use App\Controllers\BaseController;

class LoginClient extends BaseController
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

    $sql = 'Select login, password from client';
    $conn = \Config\Database::connect('bank');
    $queary = $conn->query($sql);
    $DatabaseResult = $queary->getResultArray();
    
    $buildLoginData = [
        'Database' => $DatabaseResult,
    ];

    echo view('Bank/Template/Baner', $dataBaner);
    echo view('Bank/Login/BuildLogin',$buildLoginData);
    echo view('Bank/Template/Footer');
 }

 
}