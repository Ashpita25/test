<?php
declare(strict_types=1);

include '../config/conn.php';

$user = $_SESSION['user'];

if(!isset($user)) {
    header("Location: /login.php");
    die();
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <metacharset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/styleauth.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> Главная </title>
</head>
<body>

<h4>Личный кабинет пользователя: <?=$user["name"]?></h4>

<br>

<a href="/logout.php">Выход</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>
