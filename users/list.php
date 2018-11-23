<?php

$dsn = 'mysql:host=localhost;dbname=lessons;charset=utf8';
$user = 'root';
$pass = '';

$opt = [];

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);


$users = $pdo->query('SELECT * FROM users')->fetchAll();

require_once 'show-list.php';