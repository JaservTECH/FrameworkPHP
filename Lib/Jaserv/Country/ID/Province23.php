<?php
namespace Jaserv\Country\ID;
class Province23 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN TIMUR";
        $this->info->no_province = 23;
        $this->info->no_province_real = 64;
        $this->info->city_province = "KOTA SAMARINDA";
        $this->dataKota = array(
            "KAB. BERAU",
            "KAB. KUTAI BARAT",
            "KAB. KUTAI KERTANEGARA",
            "KAB. KUTAI TIMUR",
            "KAB. MAHAKAM ULU",
            "KAB. PASER",
            "KAB. PENAJAM PASER UTARA",
            "KOTA BALIKPAPAPN",
            "KOTA BONTANG",
            "KOTA SAMARINDA",

        );
        return new Province23();
    }
}