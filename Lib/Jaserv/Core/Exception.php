<?php
/*
    Class name : ErrorJF
    Description : Function that support simple data structure process
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Core;
class Exception extends Exception {
    
    public static function SetMessage($tmpMsg){
        self::$msg = $tmpMsg;
    }
    public static function GetMessage(){
        $tmpMsg = self::$msg;
    }
}