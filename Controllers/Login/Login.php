<?php
namespace App\Controllers\Login;

use App\Controllers\BaseController;

class Login extends BaseController
{
 public function index()
 {
    $model = new \App\Models\Login();
    $dataBaner = $model->inportBanerData();
    echo $dataBaner;
    echo view('Login/Login');    
    echo view('Bank/Template/Footer');


    if(isset($_POST['login'])){
      $login = $model->login($_POST['login'],$_POST['password']);
      if($login == "no"){
         echo 'no login';
      }else{
         Login::profile();
      }
   }
 }

 public function profile()
 {
   echo view('Login/profile');
}
}
