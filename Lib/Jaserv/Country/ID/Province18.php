<?php
namespace Jaserv\Country\ID;
class Province18 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "NUSA TENGGARA BARAT";
        $this->info->no_province = 18;
        $this->info->no_province_real = 52;
        $this->info->city_province = "KOTA MATARAM";
        $this->dataKota = array(
            "KAB. BIMA",
            "KAB. DOMPU",
            "KAB. LOMBOK BARAT",
            "KAB. LOMBOK TENGAH",
            "KAB. LOMBOK TIMUR",
            "KAB. LOMBOK UTARA",
            "KAB. SUMBAWA",
            "KAB. SUMBAWA BARAT",
            "KOTA BIMA",
            "KOTA MATARAM",
        );
        return new Province18();
    }
}