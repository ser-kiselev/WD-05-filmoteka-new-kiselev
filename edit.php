<?php 

require('config.php');
require('database.php');
$link = db_connect();
require('models/films.php');
require('functions/login-functions.php');

// Update form data in DB
if ( array_key_exists('update-film', $_POST) ) {

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
		$result = film_update($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_GET['id'], $_POST['description']);

		if ($result) {
			$notifyUpdate = "<p style='color: #fff;'>Фильм успешно обновлен!</p>";
		} else {
			$notifyError = "<p style='color: #fff;'>Произошла ошибка! Попробуйте еще раз</p>";
		}
	}

}

$film = get_film($link, $_GET['id']);

include('views/head.tpl');
include('views/notifications.tpl');
include('views/edit-film.tpl');
include('views/footer.tpl');

 ?>