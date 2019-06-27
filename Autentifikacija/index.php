<?php

require_once "core/init.php";

$db = DB::getInstance();

$proba = $db->get('ozndvorana', 'dvorana');

foreach ($proba as $key => $value) 
{
    foreach ($value as $k => $v) 
    {
        
    


Helper::getHeader('Home page');

Helper::getNav();

?>
<style>

    td
    {box-sizing:border-box;
    border:1px solid #000;
    text-align:center;
    padding:0 10px;
    width:120px;}
    

</style>

<table>

        <tr>
        
        <td><?php echo $v->ozndvorana;?></td>

        </tr>
        

</table>

<?php 
    } 
}

Helper::getFooter();

?>