<?php
namespace App\Controllers\Page1;
use App\Controllers\BaseController;

class FrontPage extends BaseController
{
    public function index(){
        $title = [
            'Title 1',
            'Title 2',
            'Title 3'
        ];
        $name = ['Karol','Adrian','Marcin','Joanna'];
        $data['name'] = $name;
        $data['title'] = $title;
        echo view('pageTemplate/Baner Content');
        echo view('pageContent/index',$data);
        echo view('pageTemplate/Footer');

        
    }
    public function db(){

    }
}