<?php
namespace pub;

/**
 * Description of Loader
 *
 * @author Administrator
 */
class Loader {
    static function autoload($class)
    {
        require dirname(BASEDIR).'/'.str_replace('\\', '/', $class).'.php';
    }
}
