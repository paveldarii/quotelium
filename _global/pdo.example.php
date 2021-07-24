<?php
function openConn(){
    $dsn = "mysql:host=localhost; dbname=_database_name_";
    $db_user = "username";
    $db_pass = "password";

    date_default_timezone_set('America/New_York');
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        return $pdo;
    }
    catch(PDOException $e)
    {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>