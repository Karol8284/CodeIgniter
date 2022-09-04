<?php

namespace App\Controllers\Zawody;

use App\Controllers\BaseController;

class Index extends BaseController
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
            'title1' => 'Zawody',
        ];
       
        $table = [
            'title1' => 'Akwen',
            'title2' => 'Data Zawodów',
            'title3' => 'Wojewodztwo',
            'title4' => 'Sędzia',
        ];
        $data['table'] = $table;
        $person = new \App\Models\Person();
        $person->toldName('Karol','dwawda');
        
        
        $session = \Config\Services::session();
        $session = $session;
        $mojeImie = session("Karol");
        $Name = $session->Michał;


       echo view('Pagetemplate/header',$BanerData);
       echo view('Zawody/index', $data);
       echo view('Pagetemplate/footer');

    }
}
