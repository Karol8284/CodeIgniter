<?php

namespace App\Controllers\Zawody;

use App\Controllers\BaseController;

class rybyForm extends BaseController
{
    public function index()
    {
        $headerLink = [
            'logo' => '',
            'link1' => '/zawody',
            'link2' => '/zawody/ryby',
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

        // ------------------------------------------------- //
        $data = [];

        // $setValue = [
        //     'nazwa'         => "podaj imie",
        //     'wyspepowanie'  => 'występowanie',
        //     'stylZycia'     => 'styl Zycia',
        // ];
       echo view('Pagetemplate/header',$BanerData);
       echo view('Zawody/rybyForm', $data);
       echo view('Jquery/UsersJQ');
       echo view('Pagetemplate/footer');
    }
    public function addrybe(){
        helper(['form']);
        $data = [
            'nazwa'         => $this->request->getPost('nazwa'),
            'wystepowanie'  => $this->request->getPost('wystepowanie'),
            'styl_zycia'    => $this->request->getPost('stylZycia'),
        ];
        print_r($data);
        
        if(isset($data['nazwa'])){
            
            $conn = \Config\Database::connect('zawody');
            $builder = $conn->table('ryby');
            $builder->insert($data);
            echo "Isert";
            
        }
    }
}
