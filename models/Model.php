<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 0:05
 */

namespace app\models;

use app\interfaces\IModel;
use app\services\Db;


abstract class Model implements IModel
{

  protected $db;

  public function __construct()
  {
    $this->db = Db::getInstance();
  }

  function getOne(int $id)
  {
    $tableName = $this->getTableName();
    $sql = "SELECT * FROM {$tableName} WHERE id = :id";
    return $this->db->queryOne($sql, [":id" => $id]);
  }

  function getAll()
  {
    $tableName = $this->getTableName();
    $sql = "SELECT * FROM {$tableName}";
    return $this->db->queryAll($sql);
  }

  public function insert(){
// основываясь на состоянии объекта - они должны быть в модели
  }

  public function update() {

// основываясь на состоянии объекта  - они должны быть в модели
  }

  public function delete() {

// основываясь на состоянии объекта  - они должны быть в модели
  }

}