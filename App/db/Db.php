<?php

namespace App\db;

use PDO;
use PDOException;

class Db extends PDO {
    //private static $instance;

}

$host = 'localhost';
$db = 'logitud';
$user = 'root';
$pass = '';
$dsn = "mysql::host$host;dbname=$db";
$options = [
    PDO::ATTR_ERRMODE             => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES    => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo 'Database connexion established! -';
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), $e->getCode());
}