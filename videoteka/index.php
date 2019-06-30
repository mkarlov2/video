<?php

require_once "core/init.php";

$db = DB::getInstance();

$select = $db->get("id,ime,prezime", 'clanovi');
  
Helper::getHeader('Home page');

?>

    <main>

        <section id="sekcija">

            <div>
                <a href="addmember.php" target="_blank"><button type="button">Add Member</button></a>
            </div>

            <table class="tablica">
            
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Options</th>
                </tr>

            <?php foreach ($db->results($select) as $key => $value) 
                {   ?>

                <tr>
                    <td>
                        <?php echo $value->ime; ?>
                    </td>
                    <td>

                        <?php echo $value->prezime; ?>

                    </td>
                    
                    <td>

                        <form action="delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $value->id; ?>">
                            <input type="submit" name="remove" value="remove">
                        </form>

                        <form action="edit.php" method="POST">
                            <input type="hidden" name="clan_ime" value="<?php echo $value->ime; ?>">
                            <input type="hidden" name="clan_prez" value="<?php echo $value->prezime; ?>">
                            <input type="hidden" name="clan_id" value="<?php echo $value->id; ?>">
                            <input type="submit" name="edit" value="edit">
                        </form>

                    </td>
                </tr>

            <?php } ?>

            </table>

        </section>

    </main>

<?php 

Helper::getFooter();

?>

