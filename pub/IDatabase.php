<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of IDatabase
 *
 * @author Administrator
 */
interface IDatabase
{
    function connect($host, $user, $passsword, $dbname);
    function query($sql);
    function close();
}
