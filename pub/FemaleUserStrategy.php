<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of FemaleUserStrategy
 *
 * @author Administrator
 */
class FemaleUserStrategy implements UserStrategy
{
    public function showAD() {
        echo '我是女性哦那过户';
    }
    
    public function showCategory() {
        echo '女装';
    }
}
