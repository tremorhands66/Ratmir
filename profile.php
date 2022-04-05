<?php
session_start();

if(!isset($_SESSION['Login']))
{
    header('Location: /ynaev/register.php');
}
else
{
?>

<?php 
    require_once 'connect\connect.php';
    $login = $_SESSION['Login'];
    $testquery = mysqli_query($connect, "SELECT * FROM `firstdata` WHERE Number='$login'");
    
    $row = mysqli_fetch_array($testquery);
    //echo $row[4];


?>


<style>
        input {
            padding: 10px;
            padding-left: 35px;
            width: 180px;
            margin-left: 19px;
            margin-top: 10px;
            font-family: 'Open Sans', 'Segoe UI', sans-serif;
            font-weight: 700;
            border: 1px solid #cbd3e0;
            color: #b3bac4;
        }

        .grid-4 {
            display: inline-block;
            width: 235px;
        }
        .grid-8 {
            padding-bottom: 25px;
        }


    </style>

<br><H1 style="text-align: center;">Личный кабинет</H1>

<form  class="form-lk" action="/nikitin/login_system/" method="POST">
    <div style="display: flex; justify-content: center;">
        <div class="grid-4">
            <h3>Ваше имя</h3><input class="data" value="<?php echo $row[1]; ?>" />
            <h3>Ваша фамилия</h3><input class="pass" value="<?php echo $row[2]; ?>">
        </div>
            
        <div class="grid-4">
            <h3>Ваша почта</h3><input class="data" value="<?php echo $row[5]; ?>" />
        </div><br>
    </div>
        <button style="margin-top: 12px;position: relative;left: 46%;" type="submit" class="btn">Сохранить</button>

</form>

<?php
}
?>
