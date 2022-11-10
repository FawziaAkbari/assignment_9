<?php


if(isset($_POST['submit'])) {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    // Instantiate classes
    include "../classes/users.class.php";
    include "../controler/metode.php";
    
    $data = ['user_name', 'password'];


    $result = getUser($data);
    
    $userLogin = new Users();
    $result = $userLogin->select($data, true);

    if($result != null) {
        set_session($result);
        header('location:../index.php?wel=welcome');
    }
    else {
        header('location:../singin.php?login=failed');
    }
}

