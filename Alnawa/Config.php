<?php
namespace Alnawa;
class Config {
    use \Alnawa\Makun\DisableInstanceClass;
    use \Alnawa\Makun\PrivateClass;
    public static function Obj(){
		if(self::$instance === null){
			self::$instance = new Config();
		}
		return self::$instance;
    }
    private $config = array(
        //server
        "base_url" => '',
    );
    public function set($index=null, $value=""){
        if(!\Alnawa\Makun\Syaamilun\Manqi\Kultaamin::Obj()->isString($index)) return false;
        if(!\Alnawa\Makun\Syaamilun\Manqi\Kultaamin::Obj()->isString($value)) return false;
        if(!array_key_exists($index, $this->config)) return false;
        $this->config[$index] = $value;
        return true;
    }
    public function get($index=null){
        if(!\Alnawa\Makun\Syaamilun\Manqi\Kultaamin::Obj()->isString($index)) return null;
        if(!array_key_exists($index, $this->config)) return null;
        $temp = $this->config[$index];
        return $temp;
    }
}