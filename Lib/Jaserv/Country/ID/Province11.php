<?php
namespace Jaserv\Country\ID;
class Province11 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "BANTEN";
        $this->info->no_province = 11;
        $this->info->no_province_real = 36;
        $this->info->city_province = "KOTA SERANG";
        $this->dataKota = array(
            "KAB. LEBAK",
            "KAB. PANDEGLANG",
            "KAB. SERANG",
            "KAB. TANGERANG",
            "KOTA CILEGON",
            "KOTA SERANG",
            "KOTA TANGERANG",
            "KOTA TANGERANG SELATAN"
        );
        return new Province11();
    }
}