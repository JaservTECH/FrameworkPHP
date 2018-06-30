<?php
//Component
require_once BASEPATH.'Makun\DisableInstanceClass.php';
require_once BASEPATH.'Makun\PrivateClass.php';
//Loader
require_once BASEPATH.'Loader.php';
try{
    \Alnawa\Loader::Obj()->load_file(BASEPATH.'Config.php');
    \Alnawa\Loader::Obj()->load_file(BASEPATH.'Url.php');
}catch(\Exception $e){
    exit($e->getMessage());
}
var_dump($_SERVER);

