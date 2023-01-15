<?php

if(empty($_POST['login'])) exit('Поле "Имя" не заполнено');
if(empty($_POST['password'])) exit('Поле "Пароль" не заполнено');
if(empty($_POST['date'])) exit('Дата не заполнена');

require('users.php');

if (null !== $username || null !== $password) {

    // Если пароль из базы совпадает с паролем из формы
    if ($password === $users['password']) {
    
         // Стартуем сессию:
        session_start(); 
        
   	 // Пишем в сессию информацию о том, что мы авторизовались:
        $_SESSION['auth'] = true; 
        
        // Пишем в сессию логин и id пользователя
        $_SESSION['id'] = $users['id']; 
        $_SESSION['login'] = $username; 

    }
}
  
$auth = $_SESSION['auth'];

// если авторизованы
if ($auth) {
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
        <h1>Спа салон "Молодость"</h1> 
    </header>
    <form action="index.php" method="post">
        <input class="btn1" name="exit" type="submit" value="Выйти">
    </form>

<section class="user">
    <article>
        <p class="p"><?php echo 'Привет, пользователь ' . $_POST['login'] . '!'; ?> Для вас есть специальные предложения!</p>
        <p class="p"> <?php require_once('serverTime.php'); dateOfBirth(); ?></p>
</section>

    <section class="news">
        <article>
            <a href="#">
                <h2 class="h2">Восточный массаж "Шень-су"</h2></a><p><?php require_once('serverTime.php'); timer(); ?></p>
                <p class="p1">1500 рублей.</p> <p class="p2">1000 рублей</p>
            <div class="article-meta">
            </div>
            <img src="https://images.pexels.com/photos/6187646/pexels-photo-6187646.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        </article>
        <article>
            <a href="#">
                <h2 class="h2">Ароматерапия "Цветочный рай"</h2></a><p><?php require_once('serverTime.php'); timer(); ?></p>
                <p class="p1">2000 рублей.</p> <p class="p2">1500 рублей</p>
            <div class="article-meta">
            </div>
            <img src="https://images.pexels.com/photos/6620860/pexels-photo-6620860.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260">
        </article>
</section>
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

        <div class="copyright">Copyright © Спа салон "Молодость" 2022</div>
    </footer>
</body>
</html>
<?php } else {
    echo 'Неправильный логин или пароль';
} ?>