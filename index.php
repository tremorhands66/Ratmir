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
        <a class="active" href="index.php">Главная</a>
        <a href="stateis.php">Статьи</a>
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

    <div class="stock">
        <img src="assets/img/slide.jpg" style="max-width: 100%;display: block;margin: 20px auto;"></img>
        <div class="centered" style="font-size: 34px"><b>Правильное питание на каждый день!<b></div>
    </div>



    <H1 style="text-align: center">Принципы здорового питания</H1>
    <p style="margin: 0px 500px 15px; text-align: center">Формула правильного, здорового питания достаточно проста,
        так как включает всего лишь две составляющие, находящиеся 
        в прямой зависимости друг от друга. Суть ее такова: 
        энергетическая ценность пищи (измеряемая в калориях) должна 
        соответствовать затратам энергии организмом. Всем известно, 
        если человек много ест, но мало двигается, его нерастраченная 
        энергия превращается в лишний вес. Значит, в поддержании нормального 
        веса имеет значение образ жизни, род занятий, пол, физиологические
        данные, физическая активность. Но каждый человек может 
        придерживаться простых правил.</p>
    <div class="inf">
    <p> Итак, правильное, то есть сбалансированное или рациональное, питание требует:</p>

    <p>соблюдать режим, есть всегда в одно и то же время;</p>
    <p>придерживаться графика питания: завтрак, легкий перекус, обед, полдник, ужин. При этом основной объем пищи должен поступать в организм во время завтрака и обеда;</p>
    <p>делать перерыв между приемами пищи не более 3 часов;</p>
    <p>учитывать энергетическую ценность продуктов и верно распределять их в графике питания;</p>
    <p>рассчитывать объем порции еды, соблюдая «правило тарелки»: 1/4 – сложные углеводы, 1/4 – белки, 1/2 – овощи, фрукты, ягоды;</p>
    <p>сочетать жиры, белки и углеводы согласно личной физической активности, не забывать про витамины, микроэлементы, клетчатку;</p>
    <div>






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
	</div>
	</div><br><br><br>


    <H1 style="text-align: center">Как правильно перейти на здоровое питание?</H1>
    <p style="margin: 0px 500px 15px; text-align: center">
    Для поддержания нормального веса, комфортного самочувствия 
    и общего благополучия организма стоит продумывать меню на 
    каждый день, которое обычно называют легкой диетой на каждый 
    день. Сбалансированная диета должна составляться индивидуально, 
    на одни сутки или на неделю. Ее цель – пищевой баланс, то есть 
    соотношение белков, жиров, углеводов, близкое к 1 – 1 – 4, что 
    помогает организму полностью переваривать пищу и таким образом 
    обогащаться необходимыми веществами. Так, белок дает сытость, 
    жиры и углеводы – энергию. Нельзя забывать и о том, что диета 
    и физическая активность, оптимальная для возраста и состояния 
    здоровья, приносят двойную пользу.</p><br>

    <H1 style="text-align: center">Правила составления рациона</H1>
    <p style="margin: 0px 500px 15px; text-align: center">
    Сегодня проблема лишнего веса и, следовательно, 
    похудения – одна из самых актуальных. Переедание, 
    любовь к вредным продуктам, сидячий образ жизни,
    стресс могут стать причиной появления лишних килограммов. 
    Бывает, что борьба с ними длится годами. При этом 
    не помогают ни голодание, ни строгие диеты. Однако
    стоит вспомнить о расчете калорий и о том, что вес
    начнет снижаться, когда дефицит калорий достигнет
    20%. Поэтому можно попробовать изменить свой взгляд 
    на питание и соблюдать простую диету, которая 
    эффективно работает и не наносит вреда организму,
    но позволяет значительно улучшить фигуру и самочувствие.</p>
    <p style="margin: 0px 500px 15px; text-align: center">
    Такая диета исключает прежде всего жирное, мучное и сладкое, 
    но состоит не только из кефира и яблок, но из вкусных и
    полезных блюд. Кроме того, она включает правильное употребление
    чистой воды: по 1 стакану за 20-30 минут до завтрака и между 
    приемами пищи. Есть и еще несколько нюансов. Так, лучше не
    использовать «быстрые» каши, а готовить или запаривать их 
    вечером. Стоит научиться «обманывать» свой организм с помощью 
    интересных кулинарных трюков: особенно когда хочется продуктов,
    которые исключены из питания, например, сладостей. 
    И пора попробовать новые полезные крупы, такие как булгур, кускус и киноа.
    </p><br>

    <H1 style="text-align: center">От каких продуктов нужно отказаться?</H1>
    <p style="margin: 0px 500px 15px; text-align: center">
    Чтобы питание было здоровым и правильным, следует максимально сократить, а лучше исключить продукты с высокой степенью обработки и высококалорийную пищу [1]. Высокообработанными считаются продукты, которые технологически перерабатываются с целью улучшения внешнего вида, вкусовых качеств, ускорения процесса приготовления или увеличения срока годности.</p>
    <p style="margin: 0px 500px 15px; text-align: center">
    Конечно, высокообработанные продукты очень удобны — нет нужды тратить время на приготовление пищи. Однако такая еда во многом утрачивает свою пищевую ценность, а полезные вещества в её составе (витамины, минералы, клетчатка) разрушаются. Как правило, такие продукты содержат большое количество простых углеводов, насыщенных жиров и соли.
    </p>

</body>
</html>

