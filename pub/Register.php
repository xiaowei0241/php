<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of Register
 *
 * 注册数模式
 * @author Administrator
 */
class Register 
{
    protected static $objects;


    public static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }
    
    public static function get($name)
    {
        return self::$objects[$name];
    }

    public function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}
