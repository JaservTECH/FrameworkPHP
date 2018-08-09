<?php
namespace Jaserv\Country\ID;
class Province10 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "LAMPUNG";
        $this->info->no_province = 10;
        $this->info->no_province_real = 18;
        $this->info->city_province = "KOTA BANDAR LAMPUNG";
        $this->dataKota = array(
            "KAB. LAMPUNG BARAT",
            "KAB. LAMPUNG SELATAN",
            "KAB. LAMPUNG TENGAH",
            "KAB. LAMPUNG TIMUR",
            "KAB. LAMPUNG UTARA",
            "KAB. MESUJI",
            "KAB. PESAWARAN",
            "KAB. PESISIR BARAT",
            "KAB. PRINGSEWU",
            "KAB. TANGGAMUS",
            "KAB. TULANG BAWANG",
            "KAB. TULANG BAWANG BARAT",
            "KAB. WAY KANAN",
            "KOTA BANDAR LAMPUNG",
            "KOTA METRO"
        );
        return new Province10();
    }
}