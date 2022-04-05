<?php session_start(); ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ynaev ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">
<style>
a {

    text-decoration: none;

}
</style>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Главная</a>
        <a class="active" href="stateis.php">Статьи</a>
        <a href="about.php">Контакты</a>
        
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


    <H1 style="text-align: center">Статьи</H1>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/card1.png" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b><a href="bzy.php">Как расчитатать БЖУ?</a></b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card2.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b><a href="vegan.php">Вегетарианство</a></b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/card3.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b><a href="avokado-history.php">История авакадо</a></b></h4>  
            </div>
        </div>
	</div><br><br>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/s1.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>5 лучших белковых диет для похудения</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/s2.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Холестерин – хорошо или плохо?</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/s4.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Жиры – полезные или вредные?</b></h4>  
            </div>
        </div>
	</div><br><br>

    <div class="wrap" >
        <div class="card">
            <img src="assets/img/s3.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Полезны ли соки: мнение эксперта</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/s5.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Пить или не пить – вот в чем вопрос</b></h4> 
            </div>
        </div>

        <div class="card">
            <img src="assets/img/s6.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <h4><b>Витаминные салаты: идеи для вашего стола</b></h4>  
            </div>
        </div>
	</div><br><br>



</body>
</html>

