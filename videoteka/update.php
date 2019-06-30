<?php

require_once "core/init.php";

$db = DB::getInstance();        
  
Helper::getHeader('Home page');

$db->update('clanovi', ['ime' => $_POST['ime'] , 'prezime' => $_POST['prezime'] ], $_POST['clan_id']);

echo '<p>Successfully changed data of clan!</p>'

?>

<a href="index.php"><button type="button">Return</button></a>

<?php 
    
Helper::getFooter();

?>