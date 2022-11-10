<?php


if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $user_name = $_POST["user_name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

	$names = [
		'name', 'last_name', 'user_name','address', 'email', 'password','confirm'
	];

    include "../classes/users.class.php";
    include "../controler/metode.php";

	$data = getUser($names);
	// $data['password'] = md5($data['password']);
	$setUser = new Users();
	$user = $setUser->insert($data);
}

