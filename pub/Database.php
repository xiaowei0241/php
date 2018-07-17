<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of Database
 *
 * @author Administrator
 */


class Database 
{
    protected static $db;
    private function __construct() 
    {
        
    }
    
    static function getInstance()
    {
        if (self::$db) {
            self::$db = new self();
        }
        
        return self::$db;
    }

    public function where()
    {
        return $this;
    }
    
    public function insert()
    {
        return $this;
    }
    
    public function order()
    {
        return $this;
    }
    
    public function limit()
    {
        return $this;
    }
}
