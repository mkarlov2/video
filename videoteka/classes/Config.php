<?php

class Config
{
    private function __construct(){}

    private function __clone(){}

    public static function get($path = NULL)
    {   
        if ($path)
        {   
            /* $path razbijamo po točki i dobijemo array znači $path je 'cookie.remember.cookie_expiery' razbijemo na array koji zovemo $input 
            i njegove vrijednosti ($input[0] -> cookie $input[1] -> remember $input[2] -> cookie_expiery)  */
            $input = explode('.',$path);

            /* $input razbijamo sa foreachom gdje $key[0] je $value = cookie, $key[1] je $value = remember i $key[2] je $value = cookie_expiery */
            foreach ($input as $key => $value) 
            {
                /* tu povezujemo s documentom koji da otvara ako $key je jednak [0] koristi njegovu vrijednost $value = cookie znaci dobijemo $item = require "config/cookie.php" */
                if ($key == 0)
                {
                    $item = require "config/$value.php";
                }
                /* ovdje povezujemo ostale vrijednosti prvi krug je $item odnosno "config/cookie.php"[remember] drugi krug je "config/cookie.php"[remember][cookie_expiery] */
                else 
                {
                    $item = $item[$value];
                }                
            } 
            /* vrati "config/cookie.php"[remember][cookie_expiery] */            
            return $item;
        }
        return false;
    }
}

?>