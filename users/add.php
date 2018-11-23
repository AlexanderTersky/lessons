<?php


$name = $_POST['name'] ?? false;
$age = $_POST['age'] ?? false;

$id = $_GET['id'] ?? false;

if ($name && $age){

    $dsn = 'mysql:host=localhost;dbname=lessons;charset=utf8';
    $user = 'root';
    $pass = '';

    $opt = [];

    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);

    if ($id){
        $stmt = $pdo->prepare('UPDATE users  SET name=:name, age=:age WHERE id=:id');
        $stmt->execute(['name' => $name, 'age' => $age, 'id'=>$id]);
    }else{
        $stmt = $pdo->prepare('INSERT INTO users SET name=:name, age=:age');
        $stmt->execute(['name' => $name, 'age' => $age]);
    }

    header("Location: /users/list.php");
}