<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        return view('shop');
    }
    public function product($type){
        echo '<h2>This is a product: '.$type.'</h2>';
        //return view('product');
    }
    
}
