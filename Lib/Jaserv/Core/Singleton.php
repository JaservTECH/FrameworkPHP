<?php
/*
    Class name : Singleton
    Description : Function that support singleton
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Core;
trait Singleton {
    //disabling instance
	private function __CONSTRUCT(){
        if(method_exists($this, "Initialize")){
            $this->Initialize();
        }
    }
    private function __CLONE(){}
    private function __WAKEUP(){}
    private static $instance = null;
    public static function Get(){
        if(self::$instance === null){
            self::$instance = new static();
        }
        return self::$instance;
    }
}
