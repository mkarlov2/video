<?php

require_once "core/init.php";

$db = DB::getInstance();        
  
Helper::getHeader('Home page');

?>

    <main id="sekcija">

        <form id="create" action="create.php" method="POST" >

        <p>

            <label for="ime">Ime:</label>
            <input type="text" name="ime">

        </p>

        <p>

            <label for="prezime">Prezime:</label>
            <input type="text" name="prezime">

        </p>

        <p>

            <input type="submit" value="Potvrdi">

        </p>

        <p>

            <input type="reset" value="Resetiraj">

        </p>

        </form>

        <a href="index.php"><button type="button">Return</button></a>

    </main>

<?php 
    

Helper::getFooter();

?>
