<?php

session_start();

if(isset($_GET['exit'])) {
    session_destroy();
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
<body class="body">
    <header>
        <h1 class="h1">Спа салон "Молодость"</h1> 
    </header>
<head>
    <title>Форма авторизации</title>
</head>
<body>


<div class="div"> 
    <form action="auth.php" method="post">
        <p class="p">Имя пользователя: <input name="login" type="text" placeholder="Логин">
        <p class="p">Пароль: <input name="password" type="password" placeholder="Пароль">
        <p class="p">Дата рождения: <input type="date" id="start" name="date" value="" min="1970-01-01" max="2022-12-31"> 
        <input class="btn" name="submit" type="submit"  value="Зарегистрировать">
        <p class="p3"> У вас есть аккаунта? - <a class="a1" href="auth.php"> Войдите! </a>
    </form>
</div>

<section>
<article> <p class="p"> Наш блог.</p>
</section>
<section>
        <article>
            <a href="#">
                <h2>Лучшие техники массажа для расслабления.</h2>
            </a>
            <div class="article-meta">
                Опубликовал <a href="#">Павлов Владислав</a>
                15 января 2023
            </div>
            <img src="https://images.pexels.com/photos/4138543/pexels-photo-4138543.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            <p>Ищем пути полного расслабления.</p>
        </article>
        <article>
            <a href="#">
                <h2>Новые пополнения солей для ванн.</h2>
            </a>
            <div class="article-meta">
                Опубликовал <a href="#">Павлов Владислав</a>
                15 января 2023
            </div>
            <img src="https://images.pexels.com/photos/6724383/pexels-photo-6724383.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            <p>Рассказываем про пользу солей для тела.</p>
        </article>
        <article>
            <a href="#">
                <h2>Омолаживающие процедуры. В чём их секрет?</h2>
            </a>
            <div class="article-meta">
                Опубликовал <a href="#">Павлов Владислав</a>
                15 января 2023
            </div>
            <img src="https://images.pexels.com/photos/3985360/pexels-photo-3985360.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
            <p>Рассказываем и показываем на нашем примере.</p>
        </article>
    </section>

    <footer>
        <div class="links">
            <a href="#">Вакансии</a>
            <a href="#">Контакты</a>
            <a href="#">О нас</a>
            <a href="#">Реклама</a>
        </div>

        <div class="copyright">Copyright © Спа салон "Relax" 2023</div>
    </footer>
</body>
</html>