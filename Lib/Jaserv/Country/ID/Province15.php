<?php
namespace Jaserv\Country\ID;
class Province15 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "YOGYAKARTA";
        $this->info->no_province = 15;
        $this->info->no_province_real = 34;
        $this->info->city_province = "KOTA YOGYAKARTA";
        $this->dataKota = array(
            "KAB. BANTUL",
            "KAB. GUNUNGKIDUL",
            "KAB. KULO PROGO",
            "KAB. SLEMAN",
            "KOTA YOGYAKARTA"
        );
        return new Province15();
    }
}