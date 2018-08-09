<?php
namespace Jaserv\Country\ID;
class Province3 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "SUMATERA BARAT";
        $this->info->no_province = 3;
        $this->info->no_province_real = 13;
        $this->info->city_province = "KOTA PADANG";
        $this->dataKota = array(
            "KAB. AGAM",
            "KAB. DHARMASYARA",
            "KAB. KEPULAUAN MENTAWAI",
            "KAB. LIMA PULUH KOTA",
            "KAB. PADANG PARIAMAN",
            "KAB. PASAMAN",
            "KAB. PASAMAN BARAT",
            "KAB. PESISIR SELATAN",
            "KAB. SIJUNJUNG",
            "KAB. SOLOK",
            "KAB. SOLOK SELATAN",
            "KAB. TANAH DATAR",
            "KOTA BUKITTINGGI",
            "KOTA PADANG",
            "KOTA PADANGPANJANG",
            "KOTA PARIAMAN",
            "KOTA PAYAKUMBUH",
            "KOTA SAWAHLUNTO",
            "KOTA SOLOK"
        );
        return new Province3();
    }
}