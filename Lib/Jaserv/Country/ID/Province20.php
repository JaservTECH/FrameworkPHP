<?php
namespace Jaserv\Country\ID;
class Province20 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN BARAT";
        $this->info->no_province = 20;
        $this->info->no_province_real = 61;
        $this->info->city_province = "KOTA PONTIANAK";
        $this->dataKota = array(
            "KAB. BENGKAYANG",
            "KAB. KAPUAS HULU",
            "KAB. KAYONG UTARA",
            "KAB. KETAPANG",
            "KAB. KUBU RAYA",
            "KAB. LANDAK",
            "KAB. MELAWI",
            "KAB. MEWPAWAH",
            "KAB. SAMBAS",
            "KAB. SANGGAU",
            "KAB. SEKADAU",
            "KAB. SINTANG",
            "KOTA PONTIANAK",
            "KOTA SINGKAWANG",
        );
        return new Province20();
    }
}