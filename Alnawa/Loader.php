<?php
namespace Alnawa;
if(defined(APPPATH) || defined(BASEPATH)) exit("Anda tidak punya akses disini");
class Loader {
    use \Alnawa\Makun\DisableInstanceClass;
    use \Alnawa\Makun\PrivateClass; 
    public static function Obj(){
        if(self::$instance === null){
            self::$instance = new Loader();
        }
        return self::$instance;
    }
    public function load_file($info=""){
        if($info == "" || is_null($info)) throw new \Exception("Dokumen atau direktori tidak tersedia");
        if(is_dir($info)){

        }else if(is_file($info)){
            require_once $info;
        }else{
            throw new \Exception("Dokumen atau direktori tidak tersedia");
        }
    }
}