<?php
namespace App\Controllers\transferData;

use App\Controllers\BaseController;

class page1 extends BaseController
{
 public function index()
 {

//   echo view_cell('')
  $model = new \App\Models\shop\shopModel();
  $dataBaner = $model->inportBanerData();
  echo $dataBaner;
  echo view('transferData/page1'); 
 }
 public function Ajax1()
 {
  $data = $this->request->getVar();
  echo json_encode(array(
    'data' => $data,
    'name' => 'POLIO'
  )); 
 }
}
