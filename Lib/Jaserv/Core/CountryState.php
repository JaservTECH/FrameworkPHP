<?php
/*
    Class name : Language
    Description : Function that support main framework language
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Core;
abstract class CountryState {
    use \Jaserv\Core\Singleton;
    //code default country active
    protected $country = "ID";
    //message library
    protected $core = array(
        "ID" => array(),
        "EN" => array()
    );
    /*
    Function : SetCountry
    Description : set country language that active
    Parameter : 
        country : Code country for access the message
    */
    public function SetCountry($country = null){
      try{
          $this->country = $this->FilterCountry($country);
          return $this;
      }catch(Exceptions $err){
          throw $err;
      }
  }
   abstract protected function FilterCountry($country = null);
   abstract protected function FilterContent($message = null);
   abstract protected function ProceedContent($country, $content);
   public function GetCountry(){
      $country = $this->country;
      return $country;
   }
   protected function AddContent($country,$content = null){
      try{
         $country = $this->FilterCountry($country);
         $message = $this->FilterContent($content);
         $this->ProceedContent($country, $content);
      }catch(Exceptions $err){
         throw $err;
      }
   }
}