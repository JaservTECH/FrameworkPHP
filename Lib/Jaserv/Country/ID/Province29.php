<?php
namespace Jaserv\Country\ID;
class Province29 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "SULAWESI UTARA";
        $this->info->no_province = 29;
        $this->info->no_province_real = 71;
        $this->info->city_province = "KOTA MANADO";
        $this->dataKota = array(
            "KAB. BOLAANG MONGONDOW",
            "KAB. BOLAANG MONGONDOW SELATAN",
            "KAB. BOLAANG MONGONDOW TIMUR",
            "KAB. BOLAANG MONGONDOW UTARA",
            "KAB. KEPULAUAN SANGIHE",
            "KAB. KEPULAUAN SIAU TAGULANDANG BIARO",
            "KAB. KEPULAUAN TALAUD",
            "KAB. MINAHASA",
            "KAB. MINAHASA SELATAN",
            "KAB. MINAHASA TENGGARA",
            "KAB. MINAHASA UTARA",
            "KOTA BITUNG",
            "KOTA KOTAMOBAGU",
            "KOTA MANADO",
            "KOTA TOMOHON",
        );
        return new Province29();
    }
}