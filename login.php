<?php 

require('config.php');
require('functions/login-functions.php');

if ( isset($_POST['enter']) ) {
	$userName = 'admin';
	$userPass = '123';

	if ( $_POST['user-login'] == $userName ) {
		if ( $_POST['user-pass'] == $userPass ) {
			$_SESSION['user'] = 'admin';
			header('Location: ' . HOST . 'index.php');
		}
	}
}

include('views/head.tpl');
include('views/login.tpl');
include('views/footer.tpl');

 ?>