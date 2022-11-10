<?php


if(isset($_POST['submit'])) {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];
    
    $data = ['user_name', 'password'];

    // Instantiate classes
    include "../classes/user.login.php";
    include "../controler/login.php";
    $result = getUser($data);
    
    $userLogin = new Users();
    $result = $userLogin->select($data, true);

    if($result != null) {
        set_session($result);
        header("../index.php?wel=welcome");
    }
    else {
        header("../signin.php?login=failed");
    }
}

