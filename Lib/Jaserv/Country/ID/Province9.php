<?php
namespace Jaserv\Country\ID;
class Province9 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "KEPULAUAN BANGKA BELITUNG";
        $this->info->no_province = 9;
        $this->info->no_province_real = 19;
        $this->info->city_province = "KOTA PANGKAL PINANG";
        $this->dataKota = array(
            "KAB. BANGKA",
            "KAB. BANGKA BARAT",
            "KAB. BANGKA SELATAN",
            "KAB. BANGKA TENGAH",
            "KAB. BELITUNG",
            "KAB. BELITUNG TIMUR",
            "KOTA PANGKAL PINANG"
        );
        return new Province9();
    }
}