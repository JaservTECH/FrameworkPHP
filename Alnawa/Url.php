<?php
namespace Alnawa;
class Url {
    use \Alnawa\Makun\DisableInstanceClass;
    use \Alnawa\Makun\PrivateClass;
    private $config;
    public static function Obj(){
		if(self::$instance === null){
            self::$instance = new Url();
            $this->initialize();
		}
		return self::$instance;
    }
    private function initialize(){
        $this->config = array(
            "rooting" => (array_key_exists("PATH_INFO", $_SERVER)?$_SERVER['PATH_INFO']:null)
        );
    }
    public function get($index=null){
        if(!\Alnawa\Makun\Syaamilun\Manqi\Kultaamin::Obj()->isString($index)) return null;
        if(!array_key_exists($index, $this->config)) return null;
        $temp = $this->config[$index];
        return $temp;
    }
}