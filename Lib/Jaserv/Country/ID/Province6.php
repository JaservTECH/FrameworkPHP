<?php
namespace Jaserv\Country\ID;
class Province6 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "JAMBI";
        $this->info->no_province = 6;
        $this->info->no_province_real = 15;
        $this->info->city_province = "KOTA JAMBI";
        $this->dataKota = array(
            "KAB. BATANGHARI",
            "KAB. BUNGO",
            "KAB. KERINCI",
            "KAB. MERANGIN",
            "KAB. MUARO JAMBI",
            "KAB. SAROLANGUN",
            "KAB. TANJUNG JABUNG BARAT",
            "KAB. TANJUNG JABUNG TIMUR",
            "KAB. TEBO",
            "KOTA JAMBI",
            "KOTA SUNGAI PENUH"
        );
        return new Province6();
    }
}