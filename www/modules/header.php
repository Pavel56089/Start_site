<?php
require_once ('include/database.php');
require_once ('include/functions.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equip="X-UA-Compatible" content="IE-edge">
    <?php
    require_once ('boot.php');
    ?>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main" aria-expanded="false">
                <span class=sr-only>Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                START
            </a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li><a href="../index.php">Главная <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Мероприятия</a></li>
                <li><a href="#">Стажировки</a></li>
                <li><a href="#">О нас</a></li>
                <li><a href="../contacts.php">Контакты</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>