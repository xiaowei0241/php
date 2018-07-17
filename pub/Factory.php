<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of Factory
 *
 * @author Administrator
 */
class Factory 
{
    static function createDatabase()
    {
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
    
    /*
     * @param $id
     * @return User
     */
    static function getUser($id)
    {
        $key = 'user_'.$id;
        $user = Register::get($key);
        
        if (!$user) {
            $user = new User($id);
            Register::set($key, $user);
        }
        return $user;
    }
}
