<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="/templates/style_main.css">
    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<body>
<canvas id="q"></canvas>

<div class='bold-line'></div>
    <div class="container_big">
<!-- Форма авторизации -->

    <form action="vendor/signin.php" method="post">
        <div><h1>Добро пожаловать!</h1>
         <p>Хорошего настроения.</p> </div>
        <!-- <label>Логин</label> -->
        <input type="text" name="login" placeholder="Введите свой логин">
        <!-- <label>Пароль</label> -->
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
         <!-- <a href="register.php">Зарегистрируйтесь</a> -->
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
    </div>
    <script src="/templates/particles.js"></script>
</body>
</html>