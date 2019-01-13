<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 14:56
 */

namespace app\services;

use app\interfaces\IDb;
use app\traits\TSingleton;


class Db implements IDb
{

  use TSingleton;

  private $config = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'login' => 'root',
    'password' => 'Alex123belka',
    'database' => 'shop-php',
    'charset' => 'utf8',
  ];

  private $conn = null;

  private function getConnection()
  {
    if (is_null($this->conn)) {
      $this->conn = new \PDO(
        $this->prepareDsnString(),
        $this->config['login'],
        $this->config['password']
      );
      $this->conn->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }
    return $this->conn;
  }

  private function query(string $sql, array $params = [])
  {
    $pdoStatement = $this->getConnection()->prepare($sql);
    $pdoStatement->execute($params);
    return $pdoStatement;
  }

  public function queryOne(string $sql, array $params = [])
  {
    return $this->queryAll($sql, $params)[0];
  }

  public function queryAll(string $sql, array $params = [])
  {
    return $this->query($sql, $params)->fetchAll();
  }

  public function execute(string $sql, array $params = [])
  {
    $this->query($sql, $params);
    return true;
  }

  private function prepareDsnString()
  {
    return sprintf("%s:host=%s;dbname=%s;charset=%s",
      $this->config['driver'],
      $this->config['host'],
      $this->config['database'],
      $this->config['charset']
    );
  }

}