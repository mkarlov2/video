<?php

require_once "core/init.php";

$db = DB::getInstance();        
  
Helper::getHeader('Home page');

$db->insert('clanovi', 
[
    'ime' => $_POST['ime'],
    'prezime' => $_POST['prezime'],
]);

echo '<p>Upisano je ime '.$_POST['ime'].' i prezime '.$_POST['prezime'].'</p>'

?>

<a href="index.php"><button type="button" class="btn btn-light">Return</button></a>


<?php 
    

Helper::getFooter();

?>