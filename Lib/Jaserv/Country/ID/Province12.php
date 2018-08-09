<?php
namespace Jaserv\Country\ID;
class Province12 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "JAWA BARAT";
        $this->info->no_province = 12;
        $this->info->no_province_real = 32;
        $this->info->city_province = "KOTA BANDUNG";
        $this->dataKota = array(
            "KAB. BANDUNG",
            "KAB. BANDUNG BARAT",
            "KAB. BEKASI",
            "KAB. BOGOR",
            "KAB. CIAMIS",
            "KAB. CIANJUR",
            "KAB. CIREBON",
            "KAB. GARUT",
            "KAB. INDRAMAYU",
            "KAB. KARAWANG",
            "KAB. KUNINGAN",
            "KAB. MAJALENGKA",
            "KAB. PANGANDARAN",
            "KAB. PURWAKARTA",
            "KAB. SUBANG",
            "KAB. SUKABUMI",
            "KAB. SUMEDANG",
            "KAB. TASIKMALAYA",
            "KOTA BANDUNG",
            "KOTA BANJAR",
            "KOTA BEKASI",
            "KOTA BOGOR",
            "KOTA CIMAHI",
            "KOTA CIREBON",
            "KOTA DEPOK",
            "KOTA SUKABUMI",
            "KOTA TASIKMALAYA",
        );
        return new Province12();
    }
}