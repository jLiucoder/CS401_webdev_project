<?php

session_start();

require_once 'KLogger.php';
$logger = new KLogger ( "log.txt" , KLogger::ERROR );

 

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$repeatpassword = $_POST['password-repeat'];
$errors = array();

//validat username
if(strlen($username) > 20){
    $errors['username'] = "Username is too long";
} else {    
    if(strlen($username) === 0){
        $errors['username'] = "Username can not be empty";
    }
}

//validate email
if(strlen($email > 0)){
    if(!preg_match('/^([a-zA-Z0-9-.]+)@([a-zA-Z0-9-.]+).([a-zA-Z]{2,5})$/',$email)){
        $errors['email'] = "Email is not in the correct format";
    }else {
        if ($dao->emailExists($email)) {
            $errors['email'] = "This email address is already taken";
    }
}
}

if(strlen($password) < 8){
    $errors['password'] = "Password is too short, pick another one";
}

if($password === $repeatpassword){
    $errors['password'] = "Passwords don't match";
    $errors['repeatpassword'] = "Passwords don't match";
}



if(empty($errors)){
require_once 'Dao.php';
  $dao = new Dao();
  $dao->insertUser($_POST['username'], $_POST['email'], $_POST['password']);
  header('Location: index.html');
  exit;
 }else{
    $_SESSION['errors'] = $errors;
    $_SESSION['form'] = $_POST;

    //redirect
    header('Location: signup.php');
    exit;
 }

