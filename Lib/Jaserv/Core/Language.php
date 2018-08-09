<?php
/*
    Class name : Language
    Description : Function that support main framework language
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Core;
class Language extends CountryState{
    use \Jaserv\Core\Singleton;
    protected function Initialize(){
        $this->AddContent("ID", array(
            "_DEF_" => "Periksa masukan anda",
            //country
            "_ERR_NOT_STRING_" => "Masukan harus berupa kata",
            "_ERR_NOT_ARRAY_" => "Masukan harus kumpulan",
            "_ERR_NOT_FOUND_" => "Masukan tidak ditemukan",
            "_ERR_ARRAY_EMPTY_" => "Kumpulan kosong"
        ));
        $this->AddContent("EN", array(
            "_DEF_" => "Check your input",
            //country
            "_ERR_NOT_STRING_" => "Input must be a word",
            "_ERR_NOT_ARRAY_" => "Input must be an array",
            "_ERR_NOT_FOUND_" => "Input not found",
            "_ERR_ARRAY_EMPTY_" => "Array is empty"
        ));

    }
    /*
    Function : GetThrow
    Description : getting messsage error that define before
    Parameter : 
        code : Code for access the message
    */
    public function GetThrow($code = null){
        if(!is_string($code)) 
            return $this->core[$this->country]["_DEF_"];
        if(!array_key_exists($code, $this->core[$this->country])) 
            return $this->core[$this->country]["_DEF_"];
        return $this->core[$this->country][$code];
    }
    //implement of abstract FilterCountry
    protected function FilterCountry($country = null){
        if(!is_string($country)) 
            throw new Exception($this->GetThrow("_ERR_NOT_STRING_"));
        if(!array_key_exists($country, $this->core)) 
            throw new Exception($this->GetThrow("_ERR_NOT_DEFINE_"));
        return $country;
    }
    //implement of abstract FilterContent
    protected function FilterContent($content = null){
        if(!is_array($content)) 
            throw new Exception($this->GetThrow("_ERR_NOT_ARRAY_"));
        if(count($content) < 1) 
            throw new Exception($this->GetThrow("_ERR_ARRAY_EMPTY_"));
        return $content;
    }
    //implement of abstract ProceedContent
    protected function ProceedContent($country, $content){
        foreach($content as $key => $value){
            $this->core[$country][$key] = $value;
        }
    }
}