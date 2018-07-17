<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub\Database;

/**
 * Description of MySQLi
 *
 * @author Administrator
 */
class MySQLi implements \pub\IDatabase
{
    protected $conn;
    public function connect($host, $user, $password, $dbname) {
        $conn = mysqli_connect($host, $user, $password, $dbname);
        $this->conn = $conn;
    }
    
    public function query($sql) {
        return mysqli_query($this->conn, $sql);
    }
    
    public function close() {
        mysqli_close($this->conn);
    }
}
