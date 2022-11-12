<?php

function get_user_data($form_data){

	$data = [];

	foreach($form_data as $column_name){
		$data[$column_name] = isset($_POST[$column_name]) ? $_POST[$column_name] : '';
	}

	return $data;
}


function set_session($user){
	$_SESSION['authenticate'] = true;
	$_SESSION['user'] = [
		'user_name' => $user['user_name'],
		'email' => $user['email'],
	];
}

function is_authenticated(){
	return isset($_SESSION['authenticate']);
}