<?php

namespace App\Controllers\Slider;
use App\Controllers\BaseController;

class SliderIndex extends BaseController
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


        


       echo view('Pagetemplate/header',$BanerData);
       echo view('CSS/Slider');
       echo view('Slider/index');
       echo view('Slider/indexScript');
       echo view('Pagetemplate/footer');
    //    echo esc
    }

    public function o()
    {
        
    }
}
