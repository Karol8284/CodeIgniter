<?php 
namespace App\Models\shop;

use CodeIgniter\Database\Config;
use CodeIgniter\Database\Database;
use CodeIgniter\Modules\Modules;
class shopModel extends Modules
{
    public function inportBanerData(){
        $dataBaner = [
            'banerTitle' => 'CreateUser',
            'link' => ''
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
        return view('Bank/Template/Baner',$dataBaner);
       }
    
  protected $table = 'shop';
  protected $primaryKey = 'id';
  protected $filds = [
    'name',
    'price',
    'quantity',
    'seller',
  ];
    public function product()
    {
        
    }
    
    public function __construct()
    {
        $db = \Config\Database::connect('shop');
        $biilder = $db->table('shop');
    }
    public function selectProduct()
    {
        return $query = $this->db->query('select * from product');
    }

    //Database
    public function LoadProductFromDatabase()
    {
        
    }
    // ajax
    public function insertProduct($dataInsert)
    {
        $conn = \Config\Database::connect('shop');
        $builder = $conn->table('product');
        $builder->insert($dataInsert);
        return 'Product is isset';
    }
    public function loadDatabase()
    {
        $conn = \Config\Database::connect('shop');
        $query = $conn->query('');
        $result = $query->getResultArray();
        return $result;
    }
}