<?php


if(isset($_POST['submit'])) {
    $user_name = $_POST["user_name"];
    $password = $_POST["password"];

    // Instantiate classes
    include "../classes/setUser.class.php";
    include "../controler/metode.php";
    
    $data = ['user_name', 'password'];

    $user_login = get_user_data($data);

    $userLogin = new SetUser();
    $result = $userLogin->select($user_login, true);

    if($result != null) {
        set_session($result);
        header('location:../index.php?wel=welcome');
    }
    else {
        header('location:../singin.php?login=failed');
    }
}

