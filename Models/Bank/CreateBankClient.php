<?php
namespace App\Models;
use CodeIgniter\Model;

class CreateBankClient extends Model{
 protected $PatternCreateClient = "";
  protected $firstName;
  protected $lastName;
  protected $email;
  protected $phoneNumber;
  protected $password;

  protected $table = 'client';
  protected $id;
  protected $unique = true;

  protected $PatternCreateClientInformactionData = [
    $firstName , $lastName, $email , $phoneNumber, $password
  ];

 public function CreateClient($PatternCreateClientInformactionData){
    return print_r($PatternCreateClientInformactionData);
 }
}
