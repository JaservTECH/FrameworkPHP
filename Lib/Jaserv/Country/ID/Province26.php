<?php
namespace Jaserv\Country\ID;
class Province26 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI SELATAN";
        $this->info->no_province = 26;
        $this->info->no_province_real = 73;
        $this->info->city_province = "KOTA MAKASSAR";
        $this->dataKota = array(
            "KAB. BANTAENG",
            "KAB. BARRU",
            "KAB. BONE",
            "KAB. BULUKUMBA",
            "KAB. ENREKANG",
            "KAB. GOWA",
            "KAB. JENEPONTO",
            "KAB. KEPULAUAN SELAYAR",
            "KAB. LUWU",
            "KAB. LUWU TIMUR",
            "KAB. MAROS",
            "KAB. PANGKAJENE DAN KEPULAUAN",
            "KAB. PINRAG",
            "KAB. SIDENRENG RAPPANG",
            "KAB. SINJAI",
            "KAB. SOPPENG",
            "KAB. TAKALAR",
            "KAB. TANA TORAJA",
            "KAB. TORAJA UTARA",
            "KAB. WAJO",
            "KAB. MAKASSAR",
            "KOTA PALOPO",
            "KOTA PAREPARE",
        );
        return new Province26();
    }
}