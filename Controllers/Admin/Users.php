<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\Model;
use App\Libraries\LibUser;
class Users extends BaseController
{
    public function index()
    {
        $headerLink = [
            'logo' => '/admin/user',
            'link1' => '/admin/user',
            'link2' => 'user/r',
            'link3' => '',
        ];
        $headerLinkText = [
            'logo' => 'Home',
            'link1' => 'User',
            'link2' => 'Register',
            'link3' => '',
        ];
        $BanerData['headerLink'] = $headerLink;
        $BanerData['headerLinkText'] = $headerLinkText;

        // ------------------------------------------------- //
    $data = [];
    $session = session();
    $session->setFlashdata('success','Successful Registration');


    helper(['form']);
       echo view('PageTemplate/Header', $BanerData);
       echo view('UserLogin/login', $data);
       echo view('PageTemplate/Footer');
    }

    
    public function register()
    {
        $headerLink = [
            'logo' => '/admin/user',
            'link1' => '/admin/user',
            'link2' => '/admin/user/r',
            'link3' => '',
        ];
        $headerLinkText = [
            'logo' => 'Home',
            'link1' => 'User',
            'link2' => 'Register',
            'link3' => '',
        ];
        $BanerData['headerLink'] = $headerLink;
        $BanerData['headerLinkText'] = $headerLinkText;

        // ------------------------------------------------- //
        $data = [];
        helper(['form']);
        // $lop = $this->request->getMethod();
        // echo $lop;
        if ($this->request->getMethod() == 'post') {
            //validation
            $rules = [
                'firstName' =>          'required|min_length[3]|max_length[20]',
                'lastName' =>           'required|min_length[3]|max_length[20]',
                'email' =>              'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password' =>           'required|min_length[8]|max_length[255]',
                'passwordConfirm' =>    'matches[passowrd]',
            ];
            print_r($rules);
            //jakiś błąd jest -+- no databases selected
            if(! $this->validate($rules) == 'post'){
                $data['validation'] = $this->validator;
            }else {
                //store the user in our database
                // $model = new UserModel();
                $newData = [
                    'firstName' => $this->request->getVar('firstname'),
                    'lastName'  => $this->request->getVar('lastName'),
                    'email'     => $this->request->getVar('email'),
                    'password'  => $this->request->getVar('password'),
                ];
                // $model->save($newData);
                $session = session();
                $session->setFlashdata('success','Successful Registration');
                return redirect()->to('/');
            }
        }
        

        helper(['form']);
       echo view('PageTemplate/Header', $BanerData);
       echo view('UserLogin/register', $data);
       echo view('Jquery/UsersJQ');
       echo view('PageTemplate/Footer');
    }
}
