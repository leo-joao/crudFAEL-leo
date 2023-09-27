<?php

require 'connection.php';

$json = file_get_contents('php://input');

$post = json_decode($json, true);

$user = $post['user'];
$pass = $post['pass'];

$query = $connection->prepare("SELECT * FROM users WHERE user_name = '$user' AND user_pwd = '$pass'");

$query->execute();

$resultLogin = false;
if ($query->rowCount() > 0) {
    $resultLogin = true;
    session_start();
    $_SESSION['name'] = $user;
}

echo json_encode($resultLogin);
