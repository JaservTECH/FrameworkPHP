<?php
namespace Jaserv\Country\ID;
class Province5 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "KEPULAUAN RIAU";
        $this->info->no_province = 5;
        $this->info->no_province_real = 21;
        $this->info->city_province = "KOTA TANJUNG PINANG";
        $this->dataKota = array(
            "KAB. BINTAN KEPULAUAN",
            "KAB. KARIMUN",
            "KAB. KEPULAUAN ANAMBAS",
            "KAB. LINGGA",
            "KAB. NATUNA",
            "KOTA BATAM",
            "KOTA TANJUNG PINANG"
        );
        return new Province5();
    }
}