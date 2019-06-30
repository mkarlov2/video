<?php

require_once "core/init.php";

$db = DB::getInstance();

Helper::getHeader('Home page');

$remove = $db->delete('clanovi', ['id','=',$_POST['id']]);

    echo '<p>Removed clan</p>';

?>

<a href="index.php"><button type="button" class="btn btn-light">Return</button></a>


<?php 
    

Helper::getFooter();

?>