<?php

function getUser($data){
	$data = [];

	foreach($data as $name){
		$data[$name] = isset($_POST[$name]) ? $_POST[$name] : '';
	}
	return $data;
}

function set_session($user){
	$_SESSION['authenticated'] = true;
	$_SESSION['user'] = [
		'user_name' => $user['user_name'],
		'email' => $user['email'],
	];
}

function is_authenticated(){
	return isset($_SESSION['authenticated']);
}