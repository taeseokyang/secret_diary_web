<?php
    $username_input = $_POST['username'];
    $password_input = $_POST['password'];

    $file = fopen("login.txt","r");
    if(!$file) die("Cannot open the file.");
    $username = fgets($file);
    $password = fgets($file);
    fclose($file);

    if ($username_input == rtrim($username) && $password_input == $password){
        Header("Location:index.php");
    }else{
        Header("Location:login.html");
    }
?>


