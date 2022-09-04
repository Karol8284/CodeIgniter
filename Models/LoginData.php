<?php
namespace App\Models;
use CodeIgniter\Model\Bank;
use Config\Modules;

class LoginData extends Modules{

    protected $tableClient = 'client';
    protected $tableWorker = 'worker';

   public function inportBanerData(){
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
    return $dataBaner;
   }

   public function addLoginWariable(string $login, string $password)
   {
    $loginData = [
        'login' => $login,
        'password' => $password,
    ];
    return $loginData;
   }

   public function hashPassword(array $loginData)
   {
    if(! isset($loginData['login'])){
     return $loginData;
    }
    $loginData['password'] = password_hash($loginData['password'], PASSWORD_DEFAULT);
    unset($loginData['password']);
    return $loginData;
   }

   
   public function checkLoginData(array $LoginData)
   {
    $login = $LoginData[''];
   }
}