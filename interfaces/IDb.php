<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 11.01.2019
 * Time: 15:02
 */

namespace app\interfaces;


interface IDb
{
  function queryOne(string $sql, array $params = []);
  function queryAll(string $sql, array $params = []);
}