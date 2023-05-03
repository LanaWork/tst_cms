<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="/templates/style_reg.css">
	<link rel="stylesheet" href="/templates/style_main.css">
</head>
<body>    
	
    <canvas id="q"></canvas>
    <div class="container_big">


<div class='bold-line'></div>
    <div class='container' action="vendor/signup.php" method="post" enctype="multipart/form-data">
      <div class='window'>
        <div class='overlay'></div>
        <div class='content'>
          <div class='welcome'>Добро пожаловать!</div>
          <div class='subtitle'>Хорошего настроения.</div>
          <div class='input-fields'>
            <input type='text' placeholder='Логин' class='input-line full-width'></input>
            <input type='email' placeholder='Email' class='input-line full-width'></input>
            <input type='password' placeholder='Пароль' class='input-line full-width'></input>
            <input type='password' placeholder='Подтвердите пароль' class='input-line full-width'></input>
          </div>
          <div><button class='ghost-round full-width'>Войти</button>
          <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        </div>
        </div>
      </div>
    </div>
    <script src="/templates/particles.js"></script>


</body>
</html>