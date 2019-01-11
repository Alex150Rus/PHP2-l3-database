<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 14:56
 */

namespace app\services;

use app\interfaces\IDb;


class Db implements IDb
{

  private $config = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'login' => 'root',
    'password' => 'Alex123belka',
    'database' => 'shop-php',
    'charset' => 'utf8',
  ];

  private $conn = null;

  public function getConnection()
  {
    if (is_null($this->conn)) {

      var_dump($this->prepareDsnString());

      $this->conn = new \PDO(
        $this->prepareDsnString(),
        $this->config['login'],
        $this->config['password']
      );
    }
    return $this->conn;
  }

  public function queryOne(string $sql, array $params = [])
  {
    return [];
  }

  public function queryAll(string $sql, array $params = [])
  {
    return [];
  }

  public function execute(string $sql, array $params = [])
  {

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