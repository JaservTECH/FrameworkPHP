<?php
namespace Alnawa\Makun\Syaamilun\Manqi;
/**
 * Kultaamin berarti String atau tipe data string
 * Class yang meng-handle data berbentuk string
 */
class Kultaamin{
    use Alnawa\Makun\DisableInstanceClass;
    use Alnawa\Makun\PrivateClass;
    public static function Obj(){
		if(self::$instance === null){
			self::$instance = new Kultaamin();
		}
		return self::$instance;
    }
    //
    public function isString($data){
        if(!is_string($data)) return false;
        if($data == "") return false;
        if($data == " ") return false;
        return true;
    }
}