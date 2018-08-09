<?php
namespace Jaserv\Country\ID;
class Province17 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "BALI";
        $this->info->no_province = 17;
        $this->info->no_province_real = 51;
        $this->info->city_province = "KOTA DENPASAR";
        $this->dataKota = array(
            "KAB. BADUNG",
            "KAB. BANGLI",
            "KAB. BULELENG",
            "KAB. GIANYAR",
            "KAB. JEMBRANA",
            "KAB. KARANGASEM",
            "KAB. KLUNGKUNG",
            "KAB. TABANAN",
            "KOTA DENPASAR",
        );
        return new Province17();
    }
}