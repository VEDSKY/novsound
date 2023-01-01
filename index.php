<?php

if (file_exists('config.php')){
    require 'config.php';
    $engine = APC['ENGINE'].'/app.php';
    if (file_exists($engine)){
        require $engine;
    }
    else{
        echo('
                <h1>An error occurred!</h1> 
                <p>Application can\'t be started.
                Engine wasn\'t found in path!</p>
                <h3>Possible reasons for this error.</h3>
                <ul>
                    <li>Incorrect configuration file</li>
                    <li>Missing configuration file</li>
                    <li>Engine folder missing or renamed</li>
                    <li>Incorrect or broken <strong>.htaccess</strong> file</li>
                </ul>
                ');
    }
}

