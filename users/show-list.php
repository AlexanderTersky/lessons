<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User list</title>
</head>
<body>

<a href="show-add.php">Добавить</a>

<table border="1">
    <thead>
    <tr>
        <th>№</th>
        <th>Имя</th>
        <th>Возраст</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($users as $user) {
        ?>
        <tr>
            <td><?php echo $user['id']?></td>
            <td><?php echo $user['name']?></td>
            <td><?php echo $user['age']?></td>
            <td><a href="show-edit.php?id=<?php echo $user['id']?>">Редактировать</a></td>
            <td><a href="remove.php?id=<?php echo $user['id']?>">Удалить</a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>

</body>
</html>