<?php

if (file_exists('config.php')){
    require 'config.php';
    $engine = ENGINE.'/app.php';

    if (file_exists($engine)){
        require $engine;
    }
    else{
        echo('
                <h1>An error occurred!</h1> </br> 
                <p>Application can\'t be started. </br> 
                Engine wasn\'t found in path!</p> </br>
                <h3>Possible reasons for this error.</h3> </br>
                <ul>
                    <li>Incorrect configuration file</li>
                    <li>Missing configuration file</li>
                    <li>Engine folder missing or renamed</li>
                    <li>Incorrect or broken <strong>.htaccess</strong> file</li>
                </ul>
                ');
    }
}

