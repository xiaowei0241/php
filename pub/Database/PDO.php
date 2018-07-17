<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub\Database;

/**
 * Description of PDO
 *
 * @author Administrator
 */
class PDO implements \pub\IDatabase
{
    protected $conn;
    public function connect($host, $user, $password, $dbname) {
        $conn = new \PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $this->conn = $conn;
    }
    
    public function query($sql) {
        return $this->conn->query($sql);
    }
    
    public function close() {
        unset($this->conn);
    }
}
