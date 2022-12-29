<?php

$APPLICATION_CONSTANTS = 
[
    'APP_PATH'      => dirname(__FILE__) . '/',  // Absolute path to application location.
    'ENGINE'        => 'vSpaceLite',             // Name of the used engine. must be equals engine folder name 
    'DEBUG_MODE'    => false,
    'DB_CONFIG'     => 
    [
        'DB_HOST'   => 'localhost',
        'DB_PORT'   => '',
        'DB_NAME'   => '',
        'DB_USER'   => '',
        'DB_PASS'   => ''
    ],
    'TESTING_MODE'  => true
];



if (!defined('APC')){
    define('APC',$APPLICATION_CONSTANTS);
}

