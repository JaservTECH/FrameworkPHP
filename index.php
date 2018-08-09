<?php

require_once "vendor/autoload.php";
use \Jaserv\Language\Country;
echo Country::Get()->SetCountry("EN")->GetThrow("_ERR_NOT_STRING_");