<?php

namespace App\Controllers\Zawody;

use App\Controllers\BaseController;
use App\Libraries\lib;

class zawodnicy extends BaseController
{
    public function index()
    {
        $headerLink = [
            'logo' => '',
            'link1' => '/zawody',
            'link2' => 'zawody/ryby',
            'link3' => 'zawodnicy',
        ];
        $headerLinkText = [
            'logo' => 'Home',
            'link1' => 'Home',
            'link2' => 'ryby',
            'link3' => 'zawody/zawodnicy',
        ];
        $BanerData['headerLink'] = $headerLink;
        $BanerData['headerLinkText'] = $headerLinkText;

        // ------------------------------------------------- //

        $Data = [];
        
       echo view('Pagetemplate/header', $BanerData);
       echo view('Zawody/zawodnicy',$Data);
       echo view('Pagetemplate/footer');

    }
    public function createUser(){
        $data = [
            'imie' => $this->request->getPost('imie'),
            'nazwisko' => $this->request->getPost('nazwisko'),
            // 'adres' => $this->request->getPost('adres'),
            // 'pt' => $this->request->getPost('pt'),
        ];
        echo "ello";
        if(isset($data['imie'])){
            
            $conn = \Config\Database::connect('zawody');
            $builder = $conn->table('karty_wedkarskie');
            $builder->insert($data);
            echo "Isert";
        }
    }
}
