<?php
namespace Alnawa\Makun\Syaamilun\Manqi;
/**
 * Isthobil berarti integer atau angka
 * Class yang meng-handle data berbentuk integer
 */
class Isthobil{
    use Alnawa\Makun\DisableInstanceClass;
    use Alnawa\Makun\PrivateClass;
    public static function Obj(){
		if(self::$instance === null){
			self::$instance = new Isthobil();
		}
		return self::$instance;
    }
}