<?php

/* da nam koristi sve klase iz foldera classes */
spl_autoload_register(function ($class)
{
    include 'classes/' . $class . '.php';
});

//$cookie_expiery = Config::get('cookie')['remember']['cookie_expiery'];

// DZ napraviti da ovaj način dohvaćamo propertije iz konfiguracije
// substr_count()
//$cookie_expiery = Config::get('cookie.session.token_name');

//echo $cookie_expiery;

/* dali zelimo da nam ispise error-e E_ALL sve ispisi i 0 da ne ispiše pogledaj config folder i Config classu*/
//error_reporting(E_ALL);

//ini_set ('display_errors',Config::get('app')['error_reporting']);

ini_set ('display_errors',Config::get('app.error_reporting'));


/* da nam koristi funkciju sanitize iz foldera functions */
require_once 'functions/sanitize.php';

?>