<?php

class Helper
{
    private function __construct(){}

    private function __clone(){}

    public static function getHeader($title, $path = 'header')
    {
        $header = require_once "includes/$path.php";

        return $header;
    }

    public static function getFooter($path = 'footer')
    {
       require_once "includes/$path.php";
    }

    public static function getNav($path = 'nav')
    {
        require_once "includes/$path.php";
    }
}

?>