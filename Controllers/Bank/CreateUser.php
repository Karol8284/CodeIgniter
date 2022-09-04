<?php
namespace App\Controllers\Bank;
use App\Controllers\BaseController;
use App\Models\CreateBankClient;
use App\Models\DataBaner;
use App\Models\Person;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Database;
use Config\App;

class CreateUser extends BaseController
{
    public function index()
    {
        $dataBaner = [
            'banerTitle' => 'CreateUser',
            'link1' => ''
        ];
        $dataBaner['link'] = [
            'logo' => '',
            'link1' => '',
            'link2' => '',
            'link2List' =>  [
                'offer1' => 'oferta1',
                'offer2' => 'oferta2',
                'offer3' => 'oferta3',
            ],
            'link3' => '',
            'link4' => '',
        ];
        $dataBaner['text'] = [
            'logo' => 'Home',
            'text1' => 'Home',
            'text2' => 'Offer',
            'text2List' =>  [
                'offer1' => 'oferta1',
                'offer2' => 'oferta2',
                'offer3' => 'oferta3',
            ],
            'text3' => 'Contact',
            'text4' => 'Login',
        ];
        // <*>------------------------------------------<*>

        echo view('Bank/Template/Baner', $dataBaner);
        echo view('Bank/CreateBankClient');
        echo view('Bank/Template/Footer');
    }

    public function created(){
        $dataBaner = [
            'banerTitle' => 'CreateUser',
            'link1' => ''
        ];
        $dataBaner['link'] = [
            'logo' => '',
            'link1' => '',
            'link2' => '',
            'link2List' =>  [
                'offer1' => 'oferta1',
                'offer2' => 'oferta2',
                'offer3' => 'oferta3',
            ],
            'link3' => '',
            'link4' => '',
        ];
        $dataBaner['text'] = [
            'logo' => 'Home',
            'text1' => 'Home',
            'text2' => 'Offer',
            'text2List' =>  [
                'offer1' => 'oferta1',
                'offer2' => 'oferta2',
                'offer3' => 'oferta3',
            ],
            'text3' => 'Contact',
            'text4' => 'Login',
        ];
        // <*>------------------------------------------<*>
        echo view('Bank/Template/Baner', $dataBaner);

     if (!isset($_POST['firstName'])) {
        echo "<p>Form isn't isset</p>";
    }elseif($_POST['firstName'] == '' && $_POST['lastName'] == '' && $_POST['email'] == '' && $_POST['phoneNumber'] == '' && $_POST['password'] == ''){
       echo "<p>Form is empty.</p>";
    //    $CreateClientInformactionData = [];
      }else{
        $CreateClientInformactionData = [
        // 'id' => null,
        'firstName' => $this->request->getPost('firstName'),
        'lastName' => $this->request->getPost('lastName'),
        'email' => $this->request->getPost('email'),
        'phoneNumber' => $this->request->getPost('phoneNumber'),
        'login' => $this->request->getPost('login'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
       ];
       $conn = \Config\Database::connect("bank");
       $builder = $conn->table("client");
       $builder->insert($CreateClientInformactionData);
     if($conn->tableExists('client')){
        
     }
    //  $builder2 = $conn->table('client');
    //  $query = $conn->query($sql);
    //  $result = $query->getResult();
     $DataBankClientWasCreated['sql'] = [
        'sql1' => "SELECT * FROM `client`",
     ]; 
    //  print_r($result);
     echo view('Bank/BankClientWasCreated', $DataBankClientWasCreated);
      }

      echo view('Bank/Template/Footer');
     }
}