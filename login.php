<!--Jerry Liu-->
<!--index.php-->
<html>   

    <?php
    session_start();

    if (isset($_SESSION['authenticated'])) {
        if($_SESSION['authenticated']) {
          header('Location: index.html');
            exit;  
        } 
    }
    ?>
 

    <link rel="stylesheet" href="mystyle.css">
    <header class = "headglobal">
        <h1>
            <a href="index.html">
                <img class = "logo" src="logo.jpg" alt="globallogo" width="156" height="35.25">
             </a>
        </h1>
    
        <div class = "navigationbar">
            <ul>
                <li><a href="men.html">Men</a></li>
                <li><a href="women.html">Women</a></li>
                <li><a href="shoppingBag.html">Shopping bag</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </div>
    </header>
        
    <body>
        
        <form action="login_handler.php" method="post">
          
            <div class="container">
              <label for="username"><b>Username</b></label>
              <input type="text" value= "<?php echo isset($_SESSION['form']['username']) ? $_SESSION['form']['username'] : ''; ?>" placeholder="Enter username" name="username" required>
          
              <label for="password"><b>Password</b></label>
              <input type="password" value= "<?php echo isset($_SESSION['form']['password']) ? $_SESSION['form']['password'] : ''; ?>" placeholder="Enter Password" name="password" required>
          
              <button type="submit">Login</button><label>
              
            </div>
          
            <div class="container" style="background-color:#ffffff">
              <span class="psw"> <a href="signup.php">Sign Up</a></span>
            </div>
          </form>
        
<!--footer-->  
        <footer class="footer">
            <p>jiayuliu@u.boisestate.edu &nbsp; &nbsp;     School purpose only &nbsp; &nbsp;   All rights reserved</p>
        </footer>
    </body>
</html>