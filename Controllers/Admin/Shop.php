<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
    public function product($type){
        echo '<h2>This is a product: '.$type.'</h2>';
        //return view('product');
    }
}
