<?php

$host = 'localhost';
$dbname = 'crudFAEL';
$user = 'postgres';
$pass = '123456';

try {
    $connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);

    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
