<?php

require_once 'debug.php';

// 1. Подключение к базе данных

$dsn = 'mysql:host=localhost;dbname=lessons;charset=utf8';
$user = 'root';
$pass = '';

$opt = [];

// options

//Когда PDO работает в режиме эмуляции, все данные, которые были переданы напрямую в execute(), форматируются как строки.

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

$pdo = new PDO($dsn, $user, $pass, $opt);

// 2. Выборка из базы данных (Выполнение запросов)

//$stmt = $pdo->query('SELECT * from users');
//
//while ($row = $stmt->fetch())
//{
//    echo $row['name']."<br>";
//}


// 3. Подготовленные выражения (SQL-инъекции)
// Это обычный SQL запрос, в котором вместо переменной ставится специальный маркер - плейсхолдер.
//$sql = 'SELECT name FROM users WHERE age = ?'; - не именованный
//$sql = 'SELECT name FROM users WHERE age = :age'; именованный

//Чаще всего можно просто выполнить метод execute(), передав ему массив с переменными:
//$stmt = $pdo->prepare('SELECT name FROM users WHERE email = ?');
//$stmt->execute(array($email));

//$stmt = $pdo->prepare('SELECT name FROM users WHERE email = :email');
//$stmt->execute(array('email' => $email));

//$sql = 'SELECT * FROM users WHERE age=:age';
//
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['age' => 25]);
//
//foreach ($stmt as $row)
//{
//    d($row);
//}

//ВАЖНО: Подготовленные выражения - основная причина использовать PDO,
// поскольку это единственный безопасный способ выполнения SQL запросов, в которых участвуют переменные



//FETCH_LAZY:
//$age = 35;
//$stmt = $pdo->prepare('SELECT name FROM users WHERE age = ?');
//$stmt->execute([$age]);
//while ($row = $stmt->fetch(PDO::FETCH_LAZY))
//{
//    echo $row[0] . "<br>";
//    echo $row['name'] . "<br>";
//    echo $row->name . "<br>";
//}



//Но самой интересной функцией, с самым большим функционалом, является fetchAll(). Именно она делает PDO высокоуровневой библиотекой для работы с БД, а не просто низкоуровневым драйвером.
//
//fetchAll() возвращает массив, который состоит из всех строк, которые вернул запрос.

//$age = 35;
//$stmt = $pdo->prepare('SELECT * FROM users WHERE age = ?');
//$stmt->execute([$age]);
//
//$users = $stmt->fetchAll();//PDO::FETCH_NUM, PDO::FETCH_ASSOC, PDO::FETCH_OBJ
//
//ddd($users);


// LIKE

//$name = 'Ale';
//$name = "%$name%";
//$stm  = $pdo->prepare("SELECT * FROM users WHERE name LIKE ?");
//$stm->execute(array($name));
//$data = $stm->fetchAll();
//
//ddd($data);



// ЕСЛИ ЕЩЁ НЕ ГОВОРИЛ
//Когда PDO работает в режиме эмуляции, все данные, которые были переданы напрямую в execute(), форматируются как строки.




