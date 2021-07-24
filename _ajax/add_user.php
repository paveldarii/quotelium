<?php
require($_SERVER['DOCUMENT_ROOT'] . '/_global/pdo.php');

$pdo = openConn();

$sql = 'INSERT INTO Users (f_name, l_name, email, password) VALUES(?, ?, ?, ?)';
$statement = $pdo->prepare($sql);
$statement->execute([$_POST['given-name'], $_POST['family-name'], $_POST['email'], $_POST['new-password']]);

$user_id = $pdo->lastInsertId();
echo json_encode($user_id);





?>