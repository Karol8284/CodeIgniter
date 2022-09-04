<?php
namespace App\Controllers\Login;

use App\Controllers\BaseController;

class Login2 extends BaseController
{
 public function index()
 {
   
   $model = new \App\Models\Login2();
   $dataBaner = $model->inportBanerData();
   echo $dataBaner;

    $session = session();
    if($session->has('login')){
      echo view('Login/profile');
    }else{  
      echo view('Login/Login');    
      echo view('Bank/Template/Footer');
  
      if(isset($_POST['login'])){
         $model->login($_POST['login'],$_POST['password'],$session);
         if($session->login == 'yes'){
           redirect()->to(base_url()."/profile");
         }else{
            echo($session->login);
            echo "<br>";
            print_r(session());
         }
      }
    }
 }

 protected function profile()
 {
   echo view('Login/profile');
}
public function logout()
{
   echo "1";
   if(session()->has('login')){
      session()->remove('login');
      session()->setFlashdata("success", "Logout Success");
      echo "dwada";
      return redirect()->to('/loginBuild/login2');
   }
   return redirect()->to('/loginBuild/login2');

}
}
