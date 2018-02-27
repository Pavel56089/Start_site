<DOCRYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8"/ >
		<title>Start</title>
		<?php
		include('modules/boot.php');
		?>
	</head>
	<body>
<!--    --><?php
//    ini_set('error_reporting','E_ALL');
//    ini_set('display_errors','E_ALL');
//    ini_set('display_startup_errors','E_ALL')
//    ?>
		<?php
		include('modules/header.php');
		include('modules/banner.php');
		include('modules/description.php');
		?>
        <hr>
        <?php
        include('modules/articles.php');
        ?>
        <hr>

		
		<?php
		include('modules/footer.php');
		include('modules/strap.php');
		?>		
		
	</body>
</html>