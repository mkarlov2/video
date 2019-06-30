<?php

require_once "core/init.php";

$db = DB::getInstance();

$select = $db->get("id,ime,prezime", 'clanovi');

//$remove = $db->delete('clanovi', $value->ime);

  
Helper::getHeader('Home page');


?>

    <main>

        <div>
            <a href="addmember.php" target="_blank"><button type="button" class="btn btn-light">Add Member</button></a>
        </div>

        <table>
        
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

                    <a href="edit.php"><button type="button" class="btn btn-light">Edit</button></a>

                </td>
            </tr>

        <?php } ?>

        </table>

    </main>

<?php 

Helper::getFooter();

?>

