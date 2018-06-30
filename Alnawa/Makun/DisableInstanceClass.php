<?php
namespace Alnawa\Makun;
if(!trait_exists("DisableInstanceClass")){
    trait DisableInstanceClass{
        private function __CONSTRUCT(){}
        private function __CLONE(){}
        private function __WAKEUP(){}
    }
}