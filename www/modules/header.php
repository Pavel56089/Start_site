<?php
require_once ('include/database.php');
require_once ('include/functions.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equip="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="nav navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand">
                            START
                        </a>
                    </div>

                    <div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Главная</a></li>
                            <!--<li><a href="#">Мероприятия</a></li>
                            <li><a href="#">Стажировки</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Контакты</a></li>-->

                            <?php
                            $categories = get_categories();

                            foreach ($categories as $category):?>
                                <li><a href="category.php?id=<?=$category[id]?>"><?=$category["title"]?></a></li>
                            <?php endforeach; ?>
                            ?>

                        </ul>
                    </div>
                </div>
    </nav>
</body>
</html>