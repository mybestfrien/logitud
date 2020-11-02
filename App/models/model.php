<?php
namespace App\models;

use App\db\Db;
use \PDO;

class model extends Db {
    private $name;
    private $user;
    private $pass;
    private $host;
    private $pdo;

    public function __construct($name, $user = 'root', $pass = '', $host = 'localhost')
    {
        $this->name = $name;
        $this->user = $user;
        $this->pass = $pass;
        $this->host = $host;
    }

    private function getPDO(): PDO
    {
        if ($this->pdo === null) {
            $pdo = new PDO('mysql:dbname=logitud; host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement)
    {
        $req = $this->getPDO()->query($statement);
        return $req->fetchAll(PDO::FETCH_OBJ);
    }

}