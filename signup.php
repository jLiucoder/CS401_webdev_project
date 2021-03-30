<html>   
<?php

//start session
session_start();

//redirect if authenticated
if (isset($_SESSION['authenticated'])) {
    if ($_SESSION['authenticated']) {
        header('Location: home.php');
        exit;
    }
} 

//grab errors object
if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
    unset($_SESSION['errors']);
}
?>
  <link rel="stylesheet" href="mystyle.css">

<form action="signup_handler.php" style="border:1px solid #ccc", method = "post">

  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="username"><b>Username</b></label>
    <input type="text" value= "<?php echo isset($_SESSION['form']['username']) ? $_SESSION['form']['username'] : ''; ?>" placeholder="BruceL" name="username" required>
    
    <?php 
        if (isset($_SESSION['username'])) {
            echo "<div class='message'>".$_SESSION['username']."</div>";
        }
            unset($_SESSION['username']);
    ?>

    <label for="email"><b>Email</b></label>
    <input type="text" value= "<?php echo isset($_SESSION['form']['email']) ? $_SESSION['form']['email'] : ''; ?>" placeholder="1234567@gmail.com" name="email" required>

    <?php 
        if (isset($_SESSION['email'])) {
            echo "<div class='message'>".$_SESSION['email']."</div>";
        }
            unset($_SESSION['email']);
    ?>
    
    <label for="password"><b>Password</b></label>
    <input type="password" value= "<?php echo isset($_SESSION['form']['password']) ? $_SESSION['form']['password'] : ''; ?>" placeholder="Enter Password" name="password" required>

    <?php 
        if (isset($_SESSION['password'])) {
            echo "<div class='message'>".$_SESSION['password']."</div>";
        }
            unset($_SESSION['password']);
    ?>
    <label for="password-repeat"><b>Repeat Password</b></label>
    <input type="password" value= "<?php echo isset($_SESSION['form']['password-repeat']) ? $_SESSION['form']['password-repeat'] : ''; ?>" placeholder="Repeat Password" name="password-repeat" required>
    
    <?php 
        if (isset($_SESSION['password'])) {
            echo "<div class='message'>".$_SESSION['repeatpassword']."</div>";
        }
            unset($_SESSION['repeatpassword']);
    ?>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>


<body>
    <!--footer-->  
    <footer class="footer">
            <p>jiayuliu@u.boisestate.edu &nbsp; &nbsp;     School purpose only &nbsp; &nbsp;   All rights reserved</p>
        </footer>
</body>
<html>   