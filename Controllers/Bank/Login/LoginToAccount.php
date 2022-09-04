<?php 
namespace App\Controllers\Bank\Login;

use CodeIgniter\Config\Config;
use App\Controllers\BaseController;
use App\Models\LoginData;
use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class LoginToAccount extends BaseController
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

    $data['link'] = [
        'link1' => ' login/client',
        'link2' => 'login/worker',
    ];
  echo view('Bank/Template/Baner',$dataBaner);
  echo view('Bank/Login/LoginToAccount',$data);
  echo view('Bank/Template/Footer');
 }

 public function client()
 {
    $bamerModel = new \App\Models\LoginData();
    $dataBaner = $bamerModel->inportBanerData();

    $ClientData['action'] = '/client';
    echo view('Bank/Template/Baner', $dataBaner);
    
    if(!isset($_POST['login'])){
        echo view('Bank/Login/Login',$ClientData);
    }else{
        if($_POST['login'] == '' && $_POST['password'] == ''){
            echo '<p class="h3">You nide wright somthing</p>';
            echo view('Bank/Login/Login',$ClientData);
        }else{
            $model = new \App\Models\LoginData();

           $loginData = $model->addLoginWariable($_POST['login'],$_POST['password']);
            $loginDataPsswordHash = $model->hashPassword($loginData);

            $sql = 'Select login, password from client';
            $conn = \Config\Database::connect('bank');
            $queary = $conn->query($sql);
            $DatabaseResult = $queary->getResultArray();
            foreach($DatabaseResult as $resultdata){
             if($resultdata['login'] == $loginData['login']){
              if(password_verify($loginData['password'],$resultdata['password'])){
               echo view('Bank/Login/Profile');
               redirect()->to(base_url()."/profile");
              }
             }
            }
        }
    }   
    
    echo view('Bank/Template/Footer');
 }

 public function worker()
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

    $WorkerData['action'] = '/worker';

    
    echo view('Bank/Template/Baner', $dataBaner);
    echo view('Bank/Login/Login', $WorkerData);
    echo view('Bank/Template/Footer');
 }
}