<?php
namespace Jaserv\Country\ID;
class Province24 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN UTARA";
        $this->info->no_province = 24;
        $this->info->no_province_real = 65;
        $this->info->city_province = "KOTA TARAKAN";
        $this->dataKota = array(
            "KAB. BULUNGAN",
            "KAB. MALINAU",
            "KAB. NUNUKAN",
            "KAB. TANA TIDUNG",
            "KOTA TARAKAN",
        );
        return new Province24();
    }
}