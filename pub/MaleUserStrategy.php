<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of MaleUserStrategy
 *
 * @author Administrator
 */
class MaleUserStrategy implements UserStrategy{
    public function showAD() {
        echo '我是男人';
    }
    
    public function showCategory() {
        echo '男装';
    }
}
