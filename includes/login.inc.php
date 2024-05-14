<?php

if(isset($_POST["submit"])){
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputsSignup($name, $email, $uid, $pwd, $pwdrepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
    if(invalidUid($name, $email, $uid, $pwd, $pwdrepeat) !== false){
        header("location: ../signup.php?error=emptyinput");
        exit();
    }
       
}

else{
    header("location: ../signup.php");
    exit();
}