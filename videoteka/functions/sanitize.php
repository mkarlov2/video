<?php

function escape($string)
{
    /* sve što user upisuje se zamjenjuje posebne znakove s html znakovima &quot; npr. te dozvoljava navodnike i čćžđšđ */
    return htmlentities($string, ENT_QUOTES, "UTF-8");
}

?>