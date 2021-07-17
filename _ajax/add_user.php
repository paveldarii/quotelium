<?php
echo json_encode(array('email'=> $_POST['email'], 'password'=> $_POST['password'], "address"=>$_POST['address']));
?>