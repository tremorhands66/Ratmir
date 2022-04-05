<?php session_start(); ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ynaev ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">

</head>
<body>
    <div class="topnav">
        <a href="index.php">Главная</a>
        <a href="stateis.php">Статьи</a>
        <a class="active" href="about.php">Контакты</a>
        
        <?php
            session_start();
            if(!isset($_SESSION['Login'])) {?>
                
                <a href="login.php" style="float: right">Авторизация/Регистрация</a>
                <input type="text" placeholder="Поиск статей..">
                <?php } else {?>
                    <a href="profile.php">Личный кабинет</a>
                    <a href="exit.php">Выход</a>
                    <input type="text" placeholder="Поиск статей..">
                <?php }session_write_close();?>
    </div><br>


    <H1 style="text-align: center">Контакты</H1>
    <h2 style="text-align: center">Почта для связи:</h2>
    <p style="text-align: center">goodfood@mail.ru</p><br>

    <h2 style="text-align: center">Контактный номер телефона:</h2>
    <p style="text-align: center">8-888-888-88-88</p><br>
</body>
</html>

