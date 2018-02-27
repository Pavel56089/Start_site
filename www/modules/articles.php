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
    <?php
    include('boot.php');
    ?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="page-header">
                    <h3>Последние новости:</h3>
                </div>
                <?php
                $posts = get_posts();
                ?>
                <?php foreach ($posts as $post): ?>
                <div class="row">
                    <div class="col-md-3">
                        <a href="#" class="thumbnail">
                            <img src="<?=$post['image']?>" alt="">
                        </a>
                    </div>
                    <div class="col-md-9">
                        <h4><a href="../post.php?post_id=<?=$post['id']?>"><?=$post['title']?></a></h4>
                        <p>
                            <?=$post['description']?>
                        </p>
                        <p><a class="btn btn-info btn-sm" href="../post.php?post_id=<?=$post['id']?>">Читать полностью</a></p>
                        <br/>
                        <ul class="list-inline">
                            <li><i class="glyphicon glyphicon-list"></i> <?=$post['category']?> |</li>
                            <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th, 2012  </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <?php endforeach;?>
            </div>
            <div class="col-md-3">
                slidebar
            </div>
        </div>
    </div>
</body>
</html>