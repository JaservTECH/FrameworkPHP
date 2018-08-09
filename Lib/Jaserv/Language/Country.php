<?php
/*
    Class name : LanguageFunc
    Description : Function that support main framework language
    created at : 2018-08-04 07:30
*/
namespace Jaserv\Language;
use Jaserv\Core;
class Country extends Core\Language{
    use \Jaserv\Core\Singleton;
    public function Initialize(){
        if(is_callable("parent::Initialize")){
            parent::Initialize();
        }
        $this->AddContent("ID",array(
            "_COUNTRY_NOT_FOUND_" => "Negara tidak ditemukan",
            "_PROVINCE_NOT_FOUND_" => "Provinsi tidak ditemukan",
            "_CITY_NOT_FOUND_" => "Kota/Kabupaten tidak ditemukan",
        ));
        $this->AddContent("EN",array(
            "_COUNTRY_NOT_FOUND_" => "Country not found",
            "_PROVINCE_NOT_FOUND_" => "Province not found",
            "_CITY_NOT_FOUND_" => "City not found",
        ));
    }
}