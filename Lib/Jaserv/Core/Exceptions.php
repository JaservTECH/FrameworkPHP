<?php
/*
    Class name : Language
    Description : Function that support main framework language
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Core;
class Exceptions extends Exception {
   use \Jaserv\Core\Singleton;
   public function Error($message=null){
      if(is_string($message))
         parent::__construct($message);
      else
         return $this->getMessage();
   }
   public function Code(){ return $this->getCode();}
   public function File(){ return $this->getFile();}
   public function Line(){ return $this->getLine();}
}