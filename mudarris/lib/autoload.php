<?php 

namespace Muddaris\Lib;

class Autoload{

    public static function autoload($class){
        $path =  PUBLIC_PATH . strtolower(str_replace('Muddaris\\','',$class)) . '.php';
        if(file_exists($path)){
            require_once $path;
        }
    }
}

spl_autoload_register(__NAMESPACE__ .'\Autoload::autoload');