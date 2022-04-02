<?php 
    define('COURSE', 'PHP 8 desde cero');
    define('USER_1', 'José');
    define('ANIMALS', [
        'dog',
        'cat',
        'parrot',
        'tortoise'
    ]);

    if(defined('COURSE2')) {
        echo 'defined';
    }

    echo 'My php version is '.PHP_VERSION;
    echo '<br>';
    echo 'My OS is '.PHP_OS;
    echo '<br>';
    echo PHP_EXTENSION_DIR;
    echo '<br>';
    echo PHP_SAPI;
    echo '<br>';
    echo __LINE__;
    echo '<br>';
    echo __FILE__;
?>