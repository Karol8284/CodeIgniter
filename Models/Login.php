<?php 
namespace App\Models;

use CodeIgniter\Database\Config;
use CodeIgniter\Database\Database;
use CodeIgniter\Modules\Modules;

class Login extends Modules
{
    public function inportBanerData(){
        $dataBaner = [
            'banerTitle' => 'CreateUser',
            'link' => ''
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
        return view('Bank/Template/Baner',$dataBaner);
       }
    
    
    protected function checkVariable(string $login, string $password)
    {
        if(isset($login)){
            if($login == '' || $password == ''){
                $loginData['variable'] = 'yes';
                return $loginData;
            }else{
                $loginData['variable'] = [
                    'null' => '',
                    'login' => $login,
                    'password' => $password,
                ];
                return $loginData;
            }
        }
    }

    protected function DatabaseVariable()
    {

         $coon = \Config\Database::connect('bank');
         $query = $coon->query('SELECT `login`,`password` FROM `client`;');
         $DatabaseVariable = $query->getResultArray();
         return $DatabaseVariable;
    }

    protected function passwordVerify(string $hashPassword , string $password)
    {
        if(!password_verify($password , $hashPassword)){
            return 'no';
        }else{
            return 'yes';
        }
    }

    protected function checkExisten(array $database, array $user)
    {
        foreach($database as $base){
            if($base['login'] == $user['variable']['login'] &&  Login::passwordVerify($base['password'], $user['variable']['password'])){
                return 'yes';
            }
        }
        return 'no';
    }

    public function login(string $login, string $password)
    {   
        $check = Login::checkVariable($login,$password);
        if($check['variable'] == 'yes'){
        }else{
            $database = Login::DatabaseVariable();
            if(Login::checkExisten($database,$check) == 'no'){
                return 'no';
            }else{
                return 'yes';
            }

        }
        
    }


}