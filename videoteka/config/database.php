<?php 

return
[
    'fetch' => PDO::FETCH_OBJ,
    /* tu upisujemo koja je baza */
    'driver' => 'mysql',
    'mysql' => 
    [
        'host' => '127.0.0.1',
        'user' => 'root',
        'pass' => '',
        'db' => 'videoteka1',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci'
    ],
    'sqlite' => 
    [
        'db' => 'videoteka1'
    ],
    'pgsql' => 
    [
        'host' => '127.0.0.1',
        'user' => 'root',
        'pass' => '',
        'db' => 'videoteka1',
        'charset' => 'utf8',
        'collation' => 'utf8_general_ci'
    ]
]

?>

