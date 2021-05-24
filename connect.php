<?php
function OpenCon()
{
    // may need to put these details in a hidden file
    $dbhost = "sql3.freemysqlhosting.net";
    $username = "sql3414176";
    $password = "Ne8cnLXtVH";
    $dbname = "sql3414176";

    $conn = new mysqli($dbhost, $username, $password, $dbname) or die ("Connect failed: %s\n". $conn->error);
    return $conn;
}
function CloseCon($conn)
{
    $conn->close();
}
?>