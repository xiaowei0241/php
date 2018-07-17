<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace pub;

/**
 * Description of EventGenerator
 *
 * @author Administrator
 */
abstract class EventGenerator 
{
    private $observers = array();
    
    function addOberver(Observer $observer)
    {
        $this->observers[] = $observer;
    }
    
    function notify()
    {
        foreach ($this->observers as $observer) 
        {
            $observer->update();
        }
    }
}
