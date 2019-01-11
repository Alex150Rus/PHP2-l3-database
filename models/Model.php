<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 0:05
 */

namespace app\models;

use app\interfaces\IModel;


abstract class Model implements IModel
{

  function getOne(int $id)
  {
    $tableName = $this->getTableName();
    $sql = "SELECT * FROM {$tableName} WHERE id = {$id}";
    echo "<br>$sql";
  }

  function getAll()
  {
    $tableName = $this->getTableName();
    $sql = "SELECT * FROM {$tableName}";
    echo "<br>$sql";
  }
}