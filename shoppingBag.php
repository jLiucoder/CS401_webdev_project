<!--Jerry Liu-->
<!--shoppingbag.php-->
<html>   
<?php
        session_start();
        
    ?>
    <link rel="stylesheet" href="mystyle.css">
    <header class = "headglobal">
        <h1>
            <a href="index.php">
                <img class = "logo" src="logo.jpg" alt="globallogo" width="156" height="35.25">
             </a>
        </h1>
    
        <div class = "navigationbar">
            <ul>
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="shoppingBag.php">Shopping bag</a></li>
                <li><a href="login.php">Log in</a></li>
            </ul>
        </div>
    </header>
        
    <body>
        <div class = "shoppingBag">
            <p>Shopping bag</p>
            <p>YOU NEED TO LOG IN FIRST!</p>
            <a href="login.php" class="button">Log in</a>

        </div>
        
    
        
<!--footer-->  
        <footer class="footer">
            <p>jiayuliu@u.boisestate.edu &nbsp; &nbsp;     School purpose only &nbsp; &nbsp;   All rights reserved</p>
        </footer>
    </body>
</html>