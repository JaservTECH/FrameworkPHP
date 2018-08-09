<?php
class IDLoader {
    private $targetIndex=1;
    private $allowNext=false;
    private $allowOpen=0;
    private $targetMin=1;
    private $targetMax=34;
    private $select=null;
    private $listKey = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34);
    public function setPointer($index){
        if(is_null($index)) $this->resetPointer();
        else{
            $index = intval($index);
            if($index < $this->targetMin || $index > $this->targetMax) $this->resetPointer();
            else $this->targetIndex = $index;
        }
    }
    public function getListKey(){
        $temp = $this->listKey;
        return $temp;
    }
    public function initialize($index = null,$next=false)
    {
        $this->setPointer($index);
        $this->allowNext = $next;
        if(!$next) $this->allowOpen = 0;
        $this->select = null;
        return new IDLoader();
    }
    public function resetPointer(){
        $this->targetIndex = 1;
    }
    public function getData(){
        $c = "";
        if(is_file(__DIR__."\\"."Province".$this->targetIndex.".php")){
            $c=__DIR__."\\"."Province".$this->targetIndex.".php";
        }else if(is_file(__DIR__."/"."Province".$this->targetIndex.".php")){
            $c=__DIR__."/"."Province".$this->targetIndex.".php";
        }else 
        return false;
        if(($this->allowOpen == 0 && !$this->allowNext) || $this->allowNext){
            $this->allowOpen = 1;
            $province = "Province".$this->targetIndex;
            if(is_file(__DIR__."\\".$province.".php"))
                require_once __DIR__."\\".$province.".php";
            if(is_file(__DIR__."/".$province.".php"))
                require_once __DIR__."/".$province.".php";
            $this->select = new $province();
            $this->select->initialize();
            if($this->allowNext) $this->targetIndex = $this->targetIndex+1;
            return true;
        }
        return false;

        /*
        $c=__DIR__."\\"."Province".$this->targetIndex.".php";
        if(is_file(__DIR__."\\"."Province".$this->targetIndex.".php")){
            if(($this->allowOpen == 0 && !$this->allowNext) || $this->allowNext){
                $this->allowOpen = 1;
                $province = "Province".$this->targetIndex;
                require_once __DIR__."\\".$province.".php";
                $this->select = new $province();
                $this->select->initialize();
                if($this->allowNext) $this->targetIndex = $this->targetIndex+1;
                return true;
            }
            else return false;
        }else{
            $this->select = null;
            return false;
        }
        */
    }
    public function getResult()
    {
        return $this->select;
    }
}