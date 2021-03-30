 <?php

  session_start();


  $email = $_POST['username'];
  $password = $_POST['password'];

  // check the email and password
  require_once 'Dao.php';
  $dao = new Dao();
  $_SESSION['authenticated'] = $dao->userExist($email, $password);


  if ($_SESSION['authenticated']) {
    $_SESSION['message']="You are now logged in.";
     header('Location: index.html');
     exit;
  } else {
    $_SESSION['message']="Incorrect Username or Password."; 
     header('Location: login.php');
     exit;
  }