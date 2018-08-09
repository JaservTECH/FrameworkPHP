<?php
namespace Jaserv\Country\ID;
class Province4 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "RIAU";
        $this->info->no_province = 4;
        $this->info->no_province_real = 14;
        $this->info->city_province = "KOTA PEKANBARU";
        $this->dataKota = array(
            "KAB. BENGKALIS",
            "KAB. INDRAGIRI HILIR",
            "KAB. INDRAGIRI HULU",
            "KAB. KAMPAR",
            "KAB. KEPULAUAN MERANTI",
            "KAB. KUANTAN SINGINGI",
            "KAB. PELALAWAN",
            "KAB. ROKAN HILIR",
            "KAB. ROKAN HULU",
            "KAB. SIAK",
            "KOTA DUMAI",
            "KOTA PEKANBARU"
        );
        return new Province4();
    }
}