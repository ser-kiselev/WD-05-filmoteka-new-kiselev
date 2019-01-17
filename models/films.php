<?php 

// Getting all films from DB
function films_all($link){
	$query = "SELECT * FROM films";
	$films = array();
	$result = mysqli_query($link, $query);

	if ( $result = mysqli_query($link, $query) ){
		while ( $row = mysqli_fetch_array($result) ) {
	    	$films[] = $row;
		}
	}
	return $films;
}

function film_new($link, $title, $genre, $year, $description){

	require_once("functions/work_images.php");

	if ( empty($errors) ) {
		// Writing data to a DB
		$query = "INSERT INTO films (title, genre, year, description, poster) VALUES (
			'". mysqli_real_escape_string($link, $title) ."', 
			'". mysqli_real_escape_string($link, $genre) ."', 
			'". mysqli_real_escape_string($link, $year) ."',
			'". mysqli_real_escape_string($link, $description) ."',
			'". mysqli_real_escape_string($link, $db_file_name) ."'
		)";

		if ( mysqli_query($link, $query) ) {
			$result = true;
		} else {
			$result = false;
		}

		return $result;
	}
}

// Getting film from DB
function get_film($link, $id){
	$query = "SELECT * FROM films WHERE id = ' " . mysqli_real_escape_string($link, $id ) . "' LIMIT 1";
	$result = mysqli_query($link, $query);
	if ( $result = mysqli_query($link, $query) ) {
		$film = mysqli_fetch_array($result);
	}
	return $film;
}

function film_update($link, $title, $genre, $year, $id, $description){

	require_once("functions/work_images.php");

	$query = "UPDATE films SET title = '". mysqli_real_escape_string($link, $title) ."', genre = '". mysqli_real_escape_string($link, $genre) ."', year = '". mysqli_real_escape_string($link, $year) ."', description = '". mysqli_real_escape_string($link, $description) ."', poster = '". mysqli_real_escape_string($link, $db_file_name) ."'  WHERE id = ".mysqli_real_escape_string($link, $id)." LIMIT 1";

	if ( mysqli_query($link, $query) ) {
		$result = true;
	} else {
		$result = false;
	}

	return $result;
}

function film_delete($link, $id){
	$query = "DELETE FROM films WHERE id = ' " . mysqli_real_escape_string($link, $id) . " ' LIMIT 1";
	mysqli_query($link, $query);

	if ( mysqli_affected_rows($link) > 0 ) {
		$result = true;
	} else {
		$result = false;
	}

	return $result;
}

 ?>