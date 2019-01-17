<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<title>[Сергей Киселев] - Фильмотека</title>
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"/><![endif]-->
	<meta name="keywords" content="" />
	<meta name="description" content="" /><!-- build:cssVendor css/vendor.css -->
	<link rel="stylesheet" href="libs/normalize-css/normalize.css" />
	<link rel="stylesheet" href="libs/bootstrap-4-grid/grid.min.css" />
	<link rel="stylesheet" href="libs/jquery-custom-scrollbar/jquery.custom-scrollbar.css" /><!-- endbuild -->
	<!-- build:cssCustom css/main.css -->
	<link rel="stylesheet" href="/css/main.css" /><!-- endbuild -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;subset=cyrillic-ext" rel="stylesheet">
	<!--[if lt IE 9]><script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script><![endif]-->
</head>

<body class="index-page">
	<div class="container section-page">
		<nav class="header-nav mb-50">
			<a href="index.php" class="">Все фильмы</a>
			
			<?php if ( isAdmin() ) { ?>
				<a href="new.php">Добавить новый фильм</a>
			<?php } ?>

			<?php if ( !isAdmin() ) { ?>
				<a href="request.php">Указать информацию</a>
				<a href="login.php">Вход для админа</a>
			<?php } ?>

			<?php if ( isAdmin() ) { ?>
				<a href="logout.php">Выход</a>
			<?php } ?>
			
		</nav>

		<?php if( isset($_COOKIE['user-name']) ) { ?>
		<div class="mb-40" style="color: #616161; background: #ECEFF1; padding: 14px; border-radius: 3px;">		

			<?php if( isset($_COOKIE['user-city']) ) { ?>
				Привет, <?=$_COOKIE['user-name']?> из <?=$_COOKIE['user-city']?>!
			<?php } else { ?>
				Привет, <?=$_COOKIE['user-name']?>!
			<?php } ?>
		</div>
		<?php } ?>
				
				

		
