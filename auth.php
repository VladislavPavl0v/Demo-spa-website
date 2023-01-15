<?php

session_start();

if ($_REQUEST['login'] === "") {
    exit('Поле "Имя" не заполнено');
}
if ($_REQUEST['password'] === "") {
    exit('Поле "Пароль" не заполнено');
}
if ($_REQUEST['date'] === "") {
    exit('Дата не заполнена');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спа салон "Молодость"</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
</head>
<body class="body2">
        <h1 class="h3">Спа салон "Молодость"</h1> 
<head>
    <title>Форма авторизации</title>
</head>
<body>

<div class="div2"> 
    <form action="main.php" method="post">
        <p class="p">Имя пользователя: <input name="login" type="text" placeholder="Логин" value="<?php if (isset($_SESSION['login'])) echo $_SESSION['login']; ?>">
        <p class="p">Пароль: <input name="password" type="password" placeholder="Пароль" value="<?php if (isset($_SESSION['password'])) echo $_SESSION['password']; ?>">
        <p class="p">Дата рождения: <input type="date" id="start" name="date" value="" min="1970-01-01" max="2022-12-31" value="<?php if (isset($_SESSION['date'])) echo $_SESSION['date']; ?>">
        <input class="btn" name="submit" type="submit" value="Войти">
    </form>
</div>