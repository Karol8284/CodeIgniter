<?php

namespace App\Controllers\LerningJQ;

use App\Controllers\BaseController;
use CodeIgniter\Language\Language;

class JqTest1 extends BaseController
{
    public function index()
    {
        $headerLink = [
            'logo' => '',
            'link1' => '/zawody',
            'link2' => 'zawody/ryby',
            'link3' => 'zawody/zawodnicy',
        ];
        $headerLinkText = [
            'logo' => 'Home',
            'link1' => 'Home',
            'link2' => 'ryby',
            'link3' => 'zawodnicy',
        ];
        $BanerData['headerLink'] = $headerLink;
        $BanerData['headerLinkText'] = $headerLinkText;

        // ------------------------------------------------- //

        $data = [
            
        ];
       echo view('Pagetemplate/header',$BanerData);
       echo view('LerningJQ/Test1', $data);
       echo view('Jquery/LerningJQ/Test1');
       echo view('CSS/Test1');
       echo view('Pagetemplate/footer');

    }
}
