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


$id = $_GET['id'] ?? false;

if ($id){
    $pdo = $pdo->prepare('DELETE FROM users WHERE id=:id');
    $pdo->execute(['id'=>$id]);
    header("Location: /users/list.php");
}else{
    die('Error');
}