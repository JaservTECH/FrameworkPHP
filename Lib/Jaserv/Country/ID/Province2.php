<?php
namespace Jaserv\Country\ID;
class Province2 {
    public $dataKota=null;
    public $info=null;
    public function initialize()
    {
        $this->info = new stdClass();
        $this->info->nama = "SUMATERA UTARA";
        $this->info->no_province = 2;
        $this->info->no_province_real = 12;
        $this->info->city_province = "KOTA MEDAN";
        $this->dataKota = array(
            "KAB. ASAHAN",
            "KAB. BATUBARA",
            "KAB. DAIRI",
            "KAB. DELI SERDANG",
            "KAB. HUMBANG HASUNDUTAN",
            "KAB. KARO",
            "KAB. LABUHAN BATU",
            "KAB. LABUHAN BATU SELATAN",
            "KAB. LABUHAN BATU UTARA",
            "KAB. LANGKAT",
            "KAB. MANDAILING NATAL",
            "KAB. NIAS",
            "KAB. NIAS BARAT",
            "KAB. NIAS SELATAN",
            "KAB. NIAS UTARA",
            "KAB. PADANG LAWAS",
            "KAB. PADANG LAWAS UTARA",
            "KAB. PAKPAK BHARAT",
            "KAB. SAMOSIR",
            "KAB. SERDANG BEDAGAI",
            "KAB. SIMALUNGUN",
            "KAB. TAPANULI SELATAN",
            "KAB. TAPANULI TENGAH",
            "KAB. TAPANULI UTARA",
            "KAB. TOBA SAMOSIR",
            "KOTA BINJAI",
            "KOTA GUNUNGSITOLI",
            "KOTA MEDAN",
            "KOTA PADANGSIDEMPUAN",
            "KOTA PEMATANGSIANTAR",
            "KOTA SIBOLGA",
            "KOTA TANJUNGBALAI",
            "KOTA TEBING TINGGI"
        );
        return new Province2();
    }
}