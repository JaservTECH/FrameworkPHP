<?php
namespace Jaserv\Country\ID;
class Province13 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "JAKARTA";
        $this->info->no_province = 13;
        $this->info->no_province_real = 31;
        $this->info->city_province = "KOTA JAKARTA PUSAT";
        $this->dataKota = array(
            "KAB. ADM. KEPULAUAN SERIBU",
            "KOTA ADM. JAKARTA BARAT",
            "KOTA ADM. JAKARTA PUSAT",
            "KOTA ADM. JAKARTA SELATAN",
            "KOTA ADM. JAKARTA TIMUR",
            "KOTA ADM. JAKARTA UTARA"
        );
        return new Province13();
    }
}