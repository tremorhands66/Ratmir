<?php session_start(); ?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ynaev ISP382</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <style>
    
    
    
    #subject, select, textarea {
      width: 100%; /* Full width */
      padding: 12px; /* Some padding */ 
      border: 1px solid #ccc; /* Gray border */
      border-radius: 4px; /* Rounded borders */
      box-sizing: border-box; /* Make sure that padding and width stays in place */
      margin-top: 6px; /* Add a top margin */
      margin-bottom: 16px; /* Bottom margin */
      resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }
    
    /* Style the submit button with a specific background color etc */
    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
      background-color: #45a049;
    }
    
    /* Add a background color and some padding around the form */
    .containercomm {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }</style>
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


    <H1 style="text-align: center">История авокадо</H1>
<div style="margin-left: 15%;margin-right: 15%">
    <p>В то время как новый фрукт стал новинкой для европейцев, впервые прибывших в Мехико в 1519 году, существуют доказательства использования авокадо человеком, датирующиеся намного более ранними временами. В городе инков Чана Чана археологи обнаружили водный кувшин в форме авокадо, относящийся ко времени приблизительно 900-го года нашей эры. Сегодня благодаря нескольким рисункам и экспонатам, относящимся ко времени ранней эпохи ацтеков признано, что авокадо выращивались в течение почти 7000-10000 лет в Центральной и Южной Америке. Повсеместно в древних поселения ацтеков были найдены семена авокадо, превышающие размеры семян дикорастущих видов. Одновременно с собирательством диких плодов люди начали выращивать авокадо возле своих домов.</p>

    <p>Фрукт авокадо получил свое имя из ацтекского языка науатль, где обозначающее его слово «ahuacatl», буквально переводится как “дерево яичка”. Причиной этому может служить схожесть плода авокадо с яичками. Ацтеки полагали будто авокадо был “плодом королей”, и употребляли его как сексуальный стимулятор. Примечательно, что ацтекские семьи не позволяли своим девственным дочерям выходить за пределами дома во время сезона сбора урожая авокадо, ограждая их от непредвиденных последствий, так как считали плоды авокадо — “фруктом изобилия.”</p>

    <p>Племена Майя имели схожие представления и полагали, что у авокадо были мистические качества и «чувственные» эффекты после потребления. Это сексуальное клеймо окружающее фрукт, просуществовало вплоть до 19-го столетия. До этого времени порочный авокадо широко не употреблялся в пищу в Старом свете и Азии. Такое отношение общества к авокадо принудительно пытались изменить его производители, появившиеся к тому времени в больших количествах и культивировавшие высоко продуктивные сорта. Была начата широкая информационная кампания, давшая хорошие результаты, и пробившая для авокадо место на европейском столе.</p>

    <p>Различные фонетические интерпретации оригинального названия фрукта авокадо обусловили множество имен тропической груше: испанцы назвали их «abogado», французы «avocat», англичане «avocado». Европейские моряки использовали авокадо в качестве масла, употребляя их с хлебом, отсюда ещё одно наименование — «масло гардемарина». В Чили, Перу и Эквадоре авокадо это — “palta”, имя, данное фрукту инками. Другие наиболее известные названия авокадо: “Аллигаторова груша” — вероятно связано с видом кожуры фрукта, «Персея американская» — от латинского «Persea americana», «Корова бедняка» — индийское название, данное авокадо за его питательные свойства.</p>

    <p>Саженцы деревьев авокадо были ввезены в Калифорнию (США) в 1856 году, в Индонезию в 1750, Бразилию в 1809, Израиль в 1908, в Южную Африку и Австралию в конце 19-го столетия. Сегодня этот фрукт выращивается во множестве стран с тропическим и субтропическим климатом, а его плоды можно встретить в любом супермаркете мира. В качестве экзотического растения можно авокадо выращивать дома. Крупнейшими производителями и экспортерами авокадо являются: Мексика, Чили, США, Индонезия, Доминиканская республика.</p>


    <h3>Комментарии:</h3>
    <?php 
    
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $result_set = mysqli_query($connect, "SELECT * FROM `comments` WHERE id_news=3");
    
    //$result_set = mysqli_fetch_array($testquery);

    while ($row = $result_set->fetch_assoc()) {
        print_r($row["name"]);echo "<br>";
        print_r($row["comment"]);
        echo "<br>";echo "<br>";
    }
    
    ?>
    
    <?php if(!isset($_SESSION['Login'])) {?>

        <h3>Чтобы оставить комментарий авторизуйтесь</h3>
    <?php } else {?>    



    <div class="containercomm">
    <form name="comment" action="comment.php" method="post">

    <label for="subject">Оставьте свой комментарий</label>
    <textarea id="subject" name="text_comment" placeholder="Напишите что-нибудь.." style="height:200px"></textarea>
    <input type="hidden" name="id_news" value="3"/>
    <input type="hidden" name="login" value="<?php $login ?>"/>
    <input type="submit" value="Отправить">

    </form>
    </div>
    <?php }?>




</div>

</body>
</html>

