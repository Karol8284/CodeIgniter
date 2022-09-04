<?php

namespace App\Controllers\Zawody;

use App\Controllers\BaseController;
use CodeIgniter\CodeIgniter;
use CodeIgniter\Database\Config;
use CodeIgniter\Session\Session;
use LibUser;

class Ryby extends BaseController
{
    public function index()
    {
        $headerLink = [
            'logo' => '',
            'link1' => '/zawody',
            'link2' => 'ryby',
            'link3' => '/zawody/zawodnicy',
        ];
        $headerLinkText = [
            'logo' => 'Home',
            'link1' => 'Home',
            'link2' => 'ryby',
            'link3' => 'zawodnicy',
        ];
        $BanerData['headerLink'] = $headerLink;
        $BanerData['headerLinkText'] = $headerLinkText;
        
        // --------------------------------------------- //

        $title = [
            'title' => 'Rodzaje ryb',
        ];
        $data['title'] = $title;
        
        $_SESSION['item1'] = 'item0' ;

       echo view('Pagetemplate/header', $BanerData);
       echo view('Zawody/ryby', $data);
       echo $_SESSION['item1'];
       echo view('Jquery/ryby');
       echo view('Pagetemplate/footer');

    }
}
