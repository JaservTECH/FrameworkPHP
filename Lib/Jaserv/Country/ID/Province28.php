<?php
namespace Jaserv\Country\ID;
class Province28 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI TENGAH";
        $this->info->no_province = 28;
        $this->info->no_province_real = 72;
        $this->info->city_province = "KOTA PALU";
        $this->dataKota = array(
            "KAB. BANGGAI",
            "KAB. BANGGAI KEPULAUAN",
            "KAB. BANGGAI LAUT",
            "KAB. BUOL",
            "KAB. DONGGALA",
            "KAB. MOROWALI UTARA",
            "KAB. PARIGI MOUTONG",
            "KAB. POSO",
            "KAB. SIGI",
            "KAB. TOJO UNA-UNA",
            "KAB. TOLITOLI",
            "KOTA PALU",
        );
        return new Province28();
    }
}