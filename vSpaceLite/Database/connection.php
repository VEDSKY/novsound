<?php
  $db_host = APC['DB_CONFIG']['DB_HOST'];
  $db_user = APC['DB_CONFIG']['DB_USER'];
  $db_password = APC['DB_CONFIG']['DB_PASSWORD'];
  $db_name = APC['DB_CONFIG']['DB_NAME'];
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

?>