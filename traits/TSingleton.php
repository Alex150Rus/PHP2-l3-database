<?php
/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 14.01.2019
 * Time: 0:06
 */

namespace app\traits;


trait TSingleton
{
  private static $instance = null;

  private function __construct()
  {
  }

  private function __clone()
  {
  }

  private function __wakeup()
  {
  }

  public static function getInstance()
  {
    if (is_null(static::$instance)) {
      static::$instance = new static();
    }
    return static::$instance;
  }
}