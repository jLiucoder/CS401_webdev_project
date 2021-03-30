<!--Jerry Liu-->
<!--index.php-->
<html>   
<?php
        session_start();
        
    ?>
    
    <link rel="stylesheet" href="mystyle.css">
    <header class = "headglobal">
        <!--tried everything but favicon does seem to work-->
        <link rel="icon" type="image/png" href="/favicon.png"/>
        <link rel="shortcut icon" type="image/jpg" href="favicon.jpg"/>
        <h1>
            <a href="loggedinIndex.php">
                <img class = "logo" src="logo.jpg" alt="globallogo" width="156" height="35.25">
             </a>
        </h1>
    
        <div class = "navigationbar">
            <ul>
                <li><a href="loggedinMen.php">Men</a></li>
                <li><a href="loggedinWomen.php">Women</a></li>
                <li><a href="loggedinShoppingBag.php">Shopping bag</a></li>
                <li><a href="logout.php">Log out</a></li>
            </ul>
        </div>
    </header>
        
    <body>
        
        <p class="textAd">
            Something new is here
        </p>
        <div class="trending">
            <img src="offwhitecover.jpg" class="center">
            <img src="clotcoverN.jpg" class="center"> 
            <img src="SI cover.jpg" class="center"> 
        </div>
        
<!--footer-->  
        <footer class="footer">
            <p>jiayuliu@u.boisestate.edu &nbsp; &nbsp;     School purpose only &nbsp; &nbsp;   All rights reserved</p>
        </footer>
    </body>
</html>
