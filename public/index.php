<?php

include ('../services/Autoloader.php');
include ('../config/main.php');
use app\services\Autoloader;
use app\models\Product;
use app\models\User;

spl_autoload_register([new Autoloader(), 'loadClass']);

$product = new Product();
$product ->IamHere();
$product ->getOne(1);
$product ->getAll();

$user = new User();
$user ->getOne(5);
$user ->getAll();


/**
 * Created by PhpStorm.
 * User: Alex1
 * Date: 10.01.2019
 * Time: 23:04
 */