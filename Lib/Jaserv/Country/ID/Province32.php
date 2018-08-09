<?php
namespace Jaserv\Country\ID;
class Province32 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "MALUKU UTARA";
        $this->info->no_province = 32;
        $this->info->no_province_real = 81;
        $this->info->city_province = "TERNATE";
        $this->dataKota = array(
            "KAB. HALMAHERA BARAT",
            "KAB. HALMAHERA TENGAH",
            "KAB. HALMAHERA TIMUR",
            "KAB. HALMAHERA SELATAN",
            "KAB. HALMAHERA UTARA",
            "KAB. KEPULAUAN SULA",
            "KAB. PULAU MOROTAI",
            "KAB. PULAU TALIABU",
            "KOTA TERNATE",
            "KOTA TIDORE KEPULAUAN",
        );
        return new Province32();
    }
}