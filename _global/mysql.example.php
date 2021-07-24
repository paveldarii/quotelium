<?php
function open_conn()
{
    $db_host = "";
    $db_user = "";
    $db_pass = "";
    $db = "";
    $conn = new mysqli($db_host, $db_user, $db_pass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

function close_conn($conn)
{
    $conn -> close();
}
?>