<?php
    $db_server = 'mysql://b5469f6bac645d:12ab17a5@us-cdbr-east-05.cleardb.net/heroku_4f6f02d39b3768c?reconnect=true';
    $db_username = 'b5469f6bac645d';
    $password = '12ab17a5';
    $db_schema = 'daraja';

    try {
        $conn = new PDO("mysql:host=$db_server;dbname=$db_schema", $db_username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
?>
