<?php
namespace App\Controllers\Shop;

use App\Controllers\BaseController;
use App\Models\Login;
use CodeIgniter\Database\Config;
use CodeIgniter\Database\Query;
use CodeIgniter\Modules\Modules;
use mysqli;

class home extends BaseController
{
 public function index()
 {
    $model = new \App\Models\shop\shopModel();
    $dataBaner = $model->inportBanerData();
    echo $dataBaner;

  
  echo view('Shop/shoppingCart');
 }
 public function shoppingCar()
 {
    $model = new \App\Models\shop\shopModel();
    $dataBaner = $model->inportBanerData();
    echo $dataBaner;

    $product = new \App\Models\shop\shopModel();
    $data['product'] = $product->product();
    return $this->response->setJSON($data);
  
  echo view('Shop/shoppingCart');
 }
 public function ajaxShoppingCar()
 {
    $model = new \App\Models\shop\shopModel();
    $dataBaner = $model->inportBanerData();
    echo $dataBaner;

    //dataFromDatabase

  echo view('Shop/shoppingCart');
  
 }


//  ------------------------------------
 public function ajaxMethod()
 {
    $model = new \App\Models\Login2();
    $dataBaner = $model->inportBanerData();
    echo $dataBaner;

  return view('Shop/ajax-method');
 }

 public function AjaxResult()
 {
  $data = $this->request->getVar();
//    json_encode(array(
//     'id' => 1,
//     'name' => 'Kordian',
//     'data' => $data,
//   ));
  echo json_encode(array(
    'data' => $data,
  )); 
}
public function databaseToAjax()
{
  // $conn = mysqli_connect('localhost','root','','shop');
  // $model = new \App\Models\shop\shopModel();
  
  $conn = mysqli_connect('localhost','root','','shop');
  $query = mysqli_query($conn,'select name, price, quantity, seller from product');
  $idProductLocal = 0;
  $output = '';
  while ($row = mysqli_fetch_array($query)) {
    $output .= '<tr><td>'.$idProductLocal++.'</td><td>'.$row['name'].'</td><td>'.$row['price'].'</td><td>'.$row['quantity'].'</td><td>'.$row['seller'].'</td></tr>';
  }
  echo $output;
  while($row = mysqli_fetch_array($query)){
    
  }
}

 public function ajaxProduct()
 {
  $model = new \App\Models\shop\shopModel();
  $data = $this->request->getVar();
  $model->insertProduct($data);
  // echo json_encode(array(
  //   'name'=> '---'
  // ));
 }
}