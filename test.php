<?php

// 1. Подключение к базе данных

$dsn = 'mysql:host=localhost;dbname=lessons;charset=utf8';
$user = 'root';
$pass = '';

$opt = [];

// options

//$opt = [
//    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
//    PDO::ATTR_EMULATE_PREPARES   => false,
//];

$pdo = new PDO($dsn, $user, $pass, $opt);

// 2. Выборка из базы данных

$stmt = $pdo->query('SELECT * from users');

while ($row = $stmt->fetch())
{
    echo $row['name']."\n";
}