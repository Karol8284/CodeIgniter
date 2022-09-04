<?php
namespace App\Models;
use CodeIgniter\Model;
use CodeIgniter\Session\Session;
use CodeIgniter\Cookie\Cookie;
use Config\Cookie as CookieConfig;
use function PHPSTORM_META\type;
class Person extends Model{
   public $name = "Karol";

   public function toldName($name ,$lastName){
    $user = [
        'name' => $name,
        '$lastName' => $lastName,
    ];
    //kożystanie z bazy
    $db      = \Config\Database::connect();
$builder = $db->table('users'); 
    
    //  $_SESSION['user'] = 'Karol';
    //  echo $_SESSION['user'];
    //  return $user;
   // $this->session->set('pl');
   $this->session = \Config\Services::session();
   //$this->load->library('session');
   $this->session->set('pol', 'Hadan');
   echo $this->session->pol;
    $this->cookie = \Config\Cookie::$registrars;
   $cok = Cookie::setDefaults(new CookieConfig());
   $cookie = new Cookie('name','Karol');

   $cookie->getName('lastName');
   echo " ".$cookie->getValue();


   }
   public function name(){
    
   }
}