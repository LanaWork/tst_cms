 <?php
 
 try {
    $pdo = new PDO("mysql:host=localhost;dbname=LanaWeb;", "root", "");
    // установка режима вывода ошибок
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Установлено соединение с БД";
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
 ?>
