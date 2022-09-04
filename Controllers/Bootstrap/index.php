<?php

namespace App\Controllers\Bootstrap;

use App\Controllers\BaseController;

class index extends BaseController
{
    public function index()
    {
        echo view('Bootstrap/Page1');
    }
    
}
