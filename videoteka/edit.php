<?php

require_once "core/init.php";

$db = DB::getInstance();        
  
Helper::getHeader('Home page');

?>

    <main id="sekcija">

        <form id="update" action="update.php" method="POST" >

        <p>

            <label for="ime">Ime:</label>
            <input type="text" name="ime" value="<?php echo $_POST['clan_ime']; ?>">

        </p>

        <p>

            <label for="prezime">Prezime:</label>
            <input type="text" name="prezime" value="<?php echo $_POST['clan_prez']; ?>">

        </p>

        <p>
            <input type="hidden" name="clan_id" value="<?php echo $_POST['clan_id']; ?>">
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