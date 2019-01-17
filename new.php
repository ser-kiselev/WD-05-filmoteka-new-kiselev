<?php 

require('config.php');
require('database.php');
$link = db_connect();
require('models/films.php');
require('functions/login-functions.php');

if ( array_key_exists('newFilm', $_POST) ) {

	// Error processing
	if ( $_POST['title'] == '' ) {
		$errors[] = "<p style='color: #fff;'>Название фильма не может быть пустым!</p>";
	}
	if ( $_POST['genre'] == '' ) {
		$errors[] = "<p style='color: #fff;'>Введите жанр фильма!</p>";
	}
	if ( $_POST['year'] == '' ) {
		$errors[] = "<p style='color: #fff;'>Введите год выхода фильма!</p>";
	}
	
	if ( empty($errors) ) {
		$result = film_new($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_POST['description']);

		if ($result) {
			$notifySuccess = "<p style='color: #fff;'>Фильм успешно добавлен!</p>";
		} else {
			$notifyError = "<p style='color: #fff;'>Упс... Что-то пошло не так</p>";
		}
	}
}

include('views/head.tpl');
include('views/notifications.tpl');
include('views/new-film.tpl');
include('views/footer.tpl');

 ?>