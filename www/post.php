<?php
    ini_set('error_reporting','E_ALL');
    ini_set('display_errors','E_ALL');
    ini_set('display_startup_errors','E_ALL');
    require_once ('modules/include/database.php');
    require_once ('modules/include/functions.php');

    $post_id = $_GET['post_id'];
    if (! is_numeric($post_id)) exit();
    include('modules/header.php');
    $post = get_post_by_id($post_id);
?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="page-header">
                <h1><?=$post['title']?></h1>
            </div>
            <ul class="list-inline">
                <li><i class="glyphicon glyphicon-list"></i> <?=$post['category']?> |</li>
                <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th, 2012  </li>
            </ul>
            <br>
            <div class="post-content">
                <img src="<?=$post['image']?>" alt="" align="left" style="padding: 0 10px 10px 0">
                <?=$post['content']?>
            </div>
        </div>
        <div class="col-md-3">
            slidebar
        </div>
    </div>
</div>

<?php
include ("modules/footer.php");
?>
