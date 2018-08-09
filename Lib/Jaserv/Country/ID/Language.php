<?php
/*
    Class name : LanguageFunc
    Description : Function that support main framework language
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Country\ID;
use Jaserv\Core as Core;
class Language extends Core\Language{
    use \Core\Singleton;
    //code default country active
    protected $country = "ID";
    //message library
    protected $core = array(
        "ID" => array(
            "_DEF_" => "Periksa masukan anda",
            //country
            "_COUNTRY_ERR_NOT_STRING_" => "Masukan harus berupa kata kunci",
            "_COUNTRY_ERR_NOT_DEFINE_" => "Masukan tidak ditemukan"
        ),
        "EN" => array(
            "_DEF_" => "Check your input",
            //country
            "_COUNTRY_ERR_NOT_STRING_" => "Input must be a keyword",
            "_COUNTRY_ERR_NOT_DEFINE_" => "Input not found"
        )
    );
    /*
    Function : GetThrow
    Description : getting messsage error that define before
    Parameter : 
        code : Code for access the message
    */
    protected function GetThrow($code = null){
        if(!is_string($code)) 
            return $this->core[$this->country]["_DEF_"];
        if(!array_key_exists($code, $this->core[$this->country])) 
            return $this->core[$this->country]["_DEF_"];
        return $this->core[$this->country][$code];
    }
    /*
    Function : SetCountry
    Description : set country language that active
    Parameter : 
        country : Code country for access the message
    */
    protected function SetCountry($country = null){
        try{
            $this->country = $this->FilterCountry($country);
        }catch(\Core\Error $err){
            throw $err;
        }
        
    }
    protected function FilterCountry($country = null){
        if(!is_string($country)) 
            throw new Exception($this->GetThrow("_COUNTRY_ERR_NOT_STRING_"));
        if(!array_key_exists($country, $this->core)) 
            throw new Exception($this->GetThrow("_COUNTRY_ERR_NOT_DEFINE_"));
        return $country;
    }
    /*
    Function : GetCountry
    Description : get country language that active
    Parameter : -
    */
    protected function GetCountry(){
        $country = $this->country;
        return $country;
    }
    protected function AddMessage($country,$arrayMessage = null){

    }
}