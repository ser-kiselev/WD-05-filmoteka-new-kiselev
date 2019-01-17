<?php 

if ( isset($_FILES['poster']['name']) && $_FILES['poster']['tmp_name'] != "" ) {
	$fileName = $_FILES['poster']['name'];
	$fileTmpLoc = $_FILES['poster']['tmp_name'];
	$fileType = $_FILES['poster']['type'];
	$fileSize = $_FILES['poster']['size'];
	$fileError = $_FILES['poster']['error'];
	$kaboom = explode(".", $fileName);
	$fileExt = end($kaboom);

	list($width, $height) = getimagesize($fileTmpLoc);
	if ( $width < 10 || $height < 10 ) {
		$errors[] = 'Изображение не выбрано!';
	}

	$db_file_name = rand(100000000000, 999999999999) . "." . $fileExt;

	if ( $fileSize > 10485760 ) {
		$errors[] = 'Изображение больше, чем 10 Мб';
	} else if ( !preg_match("/\.(gif|jpg|png|jpeg)$/i", $fileName) ) {
		$errors[] = 'Недопустимое расширение изображения! Выберите jpg, jpeg, png или gif изображение';
	} else if ( $fileError == 1 ) {
		$errors[] = 'Что-то пошло не так...';
	}

	$posterFolderLocation = ROOT . 'data/films/full/';
	$posterFolderLocationMin = ROOT . 'data/films/min/';

	$uploadFile = $posterFolderLocation . $db_file_name;

	$moveResult = move_uploaded_file($fileTmpLoc, $uploadFile);
	if ( $moveResult != true ) {
		$errors[] = 'Не удалось загрузить файл!';
	}

	require_once(ROOT . "/functions/image_resize_imagick.php");

	$target_file = $posterFolderLocation . $db_file_name;
	$resized_file = $posterFolderLocationMin . $db_file_name;
	$wmax = 120;
	$hmax = 180;
	$img = createThumbnail($target_file, $wmax, $hmax);
	$img->writeImage($resized_file);
}

 ?>