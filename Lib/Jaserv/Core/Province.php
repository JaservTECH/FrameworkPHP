<?php
/*
    Class name : Language
    Description : Function that support main framework language
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Core;
use \Jaserv\Language\Country;
class Province extends CountryState{
    use \Jaserv\Core\Singleton;
    /*
    Function : SetCountry
    Description : set country language that active
    Parameter : 
        country : Code country for access the message
    */
    protected function FilterCountry($country = null){
        if(!is_string($country)) 
            throw new Exception(Country::Get()->SetCountry($this->GetCountry())->GetThrow("_ERR_NOT_STRING_"));
        if(!array_key_exists($country, $this->core)) 
            throw new Exception(Country::Get()->SetCountry($this->GetCountry())->GetThrow("_ERR_NOT_DEFINE_"));
        return $country;
    }
    protected function FilterContent($content = null){
        if(!is_array($content)) {
            if(!is_object($content))
                throw new Exception(Country::Get()->SetCountry($this->GetCountry())->GetThrow("_ERR_NOT_ARRAY_"));
            $content = array_push(array(), $content);
        }
        if(count($content) < 1) 
            throw new Exception(Country::Get()->SetCountry($this->GetCountry())->GetThrow("_ERR_ARRAY_EMPTY_"));
        return $content;
    }
    protected function ProceedContent($content = null){
        if(!is_array($content)) 
            throw new Exception(Country::Get()->SetCountry($this->GetCountry())->GetThrow("_ERR_NOT_ARRAY_"));
        if(count($content) < 1) 
            throw new Exception(Country::Get()->SetCountry($this->GetCountry())->GetThrow("_ERR_ARRAY_EMPTY_"));
        return $content;
    }
}