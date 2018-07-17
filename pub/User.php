<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of User
 *
 * @author Administrator
 */
class User 
{
    public $id;
    public $name;
    public $mobile;
    public $created;
    
    protected $db;
            
    function __construct($id) 
    {
        $this->db = new \pub\Database\MySQLi();
        $this->db->connect('127.0.0.1', 'root', '123456', 'xwboke');
        $res = $this->db->query("select * from user  where id = {$id} limit 1");
        $data = $res->fetch_assoc();
        
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->created = $data['created'];
    }
    
    function __destruct() {
        $res = $this->db->query("update user set name = '{$this->name}', mobile = '{$this->mobile}',"
        . "created='{$this->created}' where id = $this->id");
        
        echo $res;
        
    }
}
