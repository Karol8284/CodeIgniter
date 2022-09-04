<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }
    public function product($type = 'laptop', $product_id = 'Intel'){
        echo '<h2>This is a product: '.$type.' with an id: '.$product_id.'</h2>';
    }
    public function shopname($shopName){
        echo '<p>Shop name'.$shopName.'</p>';
    }
}
