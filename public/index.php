<?php

include ('../services/Autoloader.php');
include ('../config/main.php');
use app\services\Autoloader;
use app\models\Product;

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product();
var_dump($product ->getOne(4));

/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 10.01.2019
 * Time: 23:04
 */