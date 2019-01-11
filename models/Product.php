<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 10.01.2019
 * Time: 23:29
 */

namespace app\models;

class Product extends Model
{
  public $id;
  public $name;
  public $description;
  public $price;
  public $vendor_id;

  public function IamHere() {
    echo "Hello, I am Product and I am here";
  }

  public function getTableName(): string
  {
    return 'products';
  }
}