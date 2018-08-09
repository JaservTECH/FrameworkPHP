<?php
namespace Jaserv\Country\ID;
class Province30 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI BARAT";
        $this->info->no_province = 30;
        $this->info->no_province_real = 76;
        $this->info->city_province = "KAB. MAMUJU";
        $this->dataKota = array(
            "KAB. MAJENE",
            "KAB. MAMASA",
            "KAB. MAMUJU",
            "KAB. MAMUJU TENGAH",
            "KAB. MAMUJU UTARA",
            "KAB. POLEWALI",
        );
        return new Province30();
    }
}