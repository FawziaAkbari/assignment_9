<?php


if(isset($_POST['submit'])) {
    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $user_name = $_POST["user_name"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm = $_POST["confirm"];

	$user_data = [
        'first_name' ,  'last_name',  'user_name', 'address',  'email', 'password' ,'confirm'
    ];
    
    // Instantiate classes
    include "../classes/setUser.class.php";
    include "../controler/metode.php";

	$data = get_user_data($user_data);
    
	$setUser = new SetUser();
	$user = $setUser->insert($data);
    if($user) {
        header("location: ../index.php?wel=welcome");
    }
    else {
        echo "Your entry failed!";
    }
 }

