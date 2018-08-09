<?php
namespace Jaserv\Country\ID;
class Province21 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "KALIMANTAN SELATAN";
        $this->info->no_province = 21;
        $this->info->no_province_real = 63;
        $this->info->city_province = "KOTA BANJARMASIN";
        $this->dataKota = array(
            "KAB. BALANGAN",
            "KAB. BANJAR",
            "KAB. BARITO KUALA",
            "KAB. HULU SUNGAI SELATAN",
            "KAB. HULU SUNGAI TENGAH",
            "KAB. HULU SUNGAI UTARA",
            "KAB. KOTABARU",
            "KAB. TABALONG",
            "KAB. TANAH BUMBU",
            "KAB. TANAH LAUT",
            "KAB. TAPIN",
            "KOTA BANJARBARU",
            "KOTA BANJARMASIN",
        );
        return new Province21();
    }
}