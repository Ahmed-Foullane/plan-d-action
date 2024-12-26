<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "config.php" ?>
    <?php include "users/create.php" ?>

    <?php
    $sql ="select * from users;";
    mysqli_query($link,$sql);
    $result = $link->query($sql);
    
    $users = [];

    while ($row = $result->fetch_assoc()) {
        $users = $row;
    }

     ?>


<form method="post">
    <label for="">first name</label>
    <input type="text" name="first_name">
    <label for="">last name</label>
    <input type="text" name="last_name">
    <label for="">email</label>
    <input type="text" name="email">
    <label for="">password</label>
    <input type="text" name="password">
    <input type="submit">
</form>


     <?php  foreach ($result as $user) : ?>
        <p><?= $user["first_name"]?></p>
        <p><?= $user["last_name"]?></p>
        
        <a href="dele.php?id=<?php $user["id"]?>">dele</a>

        <hr>
        <?php endforeach ?>
    
</body>
</html>