<?php
namespace Jaserv\Country\ID;
class Province33 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "PAPUA";
        $this->info->no_province = 33;
        $this->info->no_province_real = 91;
        $this->info->city_province = "KOTA JAYAPURA";
        $this->dataKota = array(
            "KAB. MERAUKE",
            "KAB. JAYA WIJAYA",
            "KAB. JAYAPURA",
            "KAB. NABIRE",
            "KAB. KEPULAUAN YAPEN",
            "KAB. BIAK NUMFOR",
            "KAB. PUNCAK JAYA",
            "KAB. PANIAI",
            "KAB. MIMIKA",
            "KAB. SARMI",
            "KAB. KEEROM",
            "KAB. PEGUNUNGAN BINTANG",
            "KAB. YAHUKIMO",
            "KAB. TOLIKARA",
            "KAB. WAROPEN",
            "KAB. BOVEN DIGOEL",
            "KAB. MAPPI",
            "KAB. ASMAT",
            "KAB. SOPIORI",
            "KAB. MAMBERAMO RAYA",
            "KAB. MAMBERAMO TENGAH",
            "KAB. YALIMO",
            "KAB. LANNY JAYA",
            "KAB. NDUGA",
            "KAB. PUNCAK",
            "KAB. DOGIYAI",
            "KAB. INTAN JAYA",
            "KAB. DEIYAI",
            "KOTA JAYAPURA"
        );
        return new Province33();
    }
}