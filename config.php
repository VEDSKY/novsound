<?php

$APPLICATION_CONSTANTS = 
[
    'APP_PATH'      => dirname(__FILE__) . '/',  // Absolute path to application location.
    'ENGINE'        => 'vSpaceLite',             // Name of the used engine. must be equals engine folder name .
    'DEBUG_MODE'    => false,                    // If this enabled, application will be show all php log information.
    'TESTING_MODE'  => true,
    'DEFAULT_THEME' => 'SpaceUI',
    'DB_CONFIG'     => 
    [
        'DB_HOST'   => 'localhost',
        'DB_PORT'   => '',
        'DB_NAME'   => '',
        'DB_USER'   => '',
        'DB_PASS'   => '',
        'DB_PREFIX' => 'vspc_'                    // Database prefix.
    ]
];



if (!defined('APC')){
    define('APC',$APPLICATION_CONSTANTS);
}

