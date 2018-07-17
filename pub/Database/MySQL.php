<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace pub\Database;
/**
 * Description of MySQL
 *
 * @author Administrator
 */
class MySQL implements \pub\IDatabase
{
    protected $conn;
            
    function connect($host, $user, $password, $dbname) {
        $conn = mysql_connect($host, $user, $password);
        mysql_select_db($dbname, $conn);
        $this->conn = $conn;
    }
    
    function query($sql) 
    {
        $res = mysql_query($sql, $this->conn);
        return $res;
        
    }
    
    function close() 
    {
        mysql_close($this->conn);
    }
}
