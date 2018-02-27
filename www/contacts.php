<?php
require_once ('modules/include/database.php');
require_once ('modules/include/functions.php');
?>
<DOCRYPE HTML>
    <html>
        <head>
            <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/ >
            <title>Start Контакты</title>
            <?php
            include('modules/boot.php');
            ?>

        </head>
        <body>
            <?php
            include('modules/header.php');
            ?>
            <div class="article">
                <div class="container">
                    <h1>Контакты</h1>

                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                    <section class="team">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 col-md-offset-1">
                                    <div class="col-lg-12">
                                        <?php
                                        $contacts = get_contacts();
                                        ?>
                                        <?php foreach ($contacts as $contact): ?>
                                        <div class="row pt-md">
                                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
                                                <div class="img-box">
                                                    <img src="<?=$contact['img']?>" class="img-responsive">

                                                </div>
                                                <h1><?=$contact['name']?></h1>
                                                <h2><?=$contact['role']?></h2>
                                                <p><?=$contact['about']?></p>
                                            </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <footer>
                        <div class="container">
                </div>
            </div>
                <?php
                include('modules/footer.php');
                include('modules/strap.php');
                ?>
        </body>
    </html>