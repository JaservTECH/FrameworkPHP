<?php
namespace Jaserv\Country\ID;
class Province25 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "GORONTALO";
        $this->info->no_province = 25;
        $this->info->no_province_real = 75;
        $this->info->city_province = "KOTA GORONTALO";
        $this->dataKota = array(
            "KAB. BOALEMO",
            "KAB. BONE BOLANGO",
            "KAB. GORONTALO",
            "KAB. GORONTALO UTARA",
            "KAB. POHUWATO",
            "KOTA GORONTALO",
        );
        return new Province25();
    }
}