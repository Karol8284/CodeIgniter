<?php
namespace App\Controllers\Page1;
use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(){
        $db = \Config\Database::connect("Karol");
        $query = $db->query('select * from users');
        $result = $query->getResult();
        print_r($result);
    }
    public function loginPost(){
       
    }
}