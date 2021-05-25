<?php
    require_once("config.php");

    $dbhost = $CONFIG_SQL_DB_HOST;
    $username = $CONFIG_SQL_DB_USERNAME;
    $password = $CONFIG_SQL_DB_PASSWORD;
    $dbname = $CONFIG_SQL_DB_NAME;

    function OpenCon()
    {
        $conn = new mysqli($dbhost, $username, $password, $dbname) or die ("Connect failed: %s\n". $conn->error);
        return $conn;
    }

    function CloseCon($conn)
    {
        $conn->close();
    }
?>