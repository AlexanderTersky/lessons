<?php

$id = $_GET['id'] ?? false;

if ($id){

    $dsn = 'mysql:host=localhost;dbname=lessons;charset=utf8';
    $user = 'root';
    $pass = '';

    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $user, $pass, $opt);

    $stmt = $pdo->prepare('SELECT * from users WHERE id=:id');
    $stmt->execute(['id'=>$id]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User list</title>
</head>
<body>

<form action="add.php?id=<?php echo $user['id'];?>" method="post">
    <label for="">Имя</label>
    <input type="text" name="name" value="<?php echo $user['name'];?>" required>

    <br>

    <label for="">Возраст</label>
    <input type="text" name="age" value="<?php echo $user['age'];?>" required>

    <br>

    <button type="submit">Сохранить</button>
</form>


</body>
</html>


