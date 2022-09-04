<?php
namespace App\Controllers\Page1;
use App\Controllers\BaseController;

use function PHPSTORM_META\type;

class LoginPage extends BaseController
{
    public function index(){
        $data['title'] = 'Login to server';
        
        $conn = \Config\Database::connect("Login");
            $sql1 = "Select * from users";
            $query1 = $conn->query($sql1);
            $result1 = $query1->getResult();
        
        echo view('pageTemplate/header');
        echo view('pageContent/logowanie', $data);
        
        

        echo view('pageTemplate/Footer');
    }
    public function loginPost(){
        echo "Sprawdzanie logowania<br>";
        if(!isset($_POST['login'])){
            echo "Brak danych logowania <br>";
        }else{
            if ($_POST['login'] == '' || $_POST['password'] == '') {
               echo "Brak wartości";
            }else{
                $LoginData = [
                    'login' => $_POST['login'],
                    'password' => $_POST['password'],
                ];

                $conn = \Config\Database::connect("Login");
                $sql1 = "Select Login, Password from users";
                $query1 = $conn->query($sql1);
                $result1 = $query1->getResult();
                echo "<br>".(count($result1));
                echo "<br>";
                foreach($result1 as $r){                    
                    if($r->Login == $LoginData['login']){
                        if(!($r->Password == $LoginData['password'])){
                            echo "Błędne hasło";
                        }else {
                            echo "Zalogowano: ".$r->Login;
                        }
                    }
                }
            }
        }
    }
}