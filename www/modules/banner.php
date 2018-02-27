<!--<div class="jumbotron">
		<div class="container">
			<h1>Летние Стажировки 2018</h1>
			<p>Вы сможете постажироваться в ведущих компаниях и получить бесценнный опыт.
			 Отбор на стажировки будет проходить в 2 этапа</p>
			<p><a class="btn btn-primary btn-lg" href="#" role="button">Подробнее</a></p>
		</div>
</div>-->
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equip="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" >
    <?php
    include('boot.php');
    ?>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div class="container">
<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>

        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <!-- Слайды карусели -->
    <div class="carousel-inner">
        <div class="active item">
            <img src="../img/avito.jpg" alt="" class="slide">
            <div class="carousel-caption">
                <h3>START</h3>
                <p>проект профориентации, стажировок и развития профессиональных навыков лицеистов.</p>
                <button class="btn btn-primary btn-lg">Подробнее</button>
            </div>
        </div>
        <!-- Слайд №2 -->
        <div class="item">
            <img src="../img/st-bg.jpg" alt="" class="slide">
            <div class="carousel-caption">
                <h3>Стажировки are coming</h3>
                <p>Следите за обновлениями на сайте и в группе ВК</p>
            </div>
        </div>
        <!-- Слайд №3 -->
        <div class="item">
            <img src="../img/bug_bg.jpg" alt="" class="slide">
            <div class="carousel-caption">
                <h3 class="text-dark">Внимание!</h3>
                <p class="text-dark">Сайт работает в тестовом режиме. Вы можете сообщить о багах или недостатках.</p>
                <button class="btn btn-primary btn-lg btn-danger">Сообщить</button>
            </div>
        </div>
    </div>
    <!-- Навигация для карусели -->
    <!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
    <a class="carousel-control right" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>
</div>
    <?php
    include('modules/strap.php');
    ?>
</body>
</html>