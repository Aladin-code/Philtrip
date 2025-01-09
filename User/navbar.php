<?php
  
     include "login.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        nav {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 10% 10px 3;
        background-color: white;
        height: 75px; /* set the height of the navigation bar */
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
        box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.75);
    } 
    body {
        font-family: Helvetica, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #F7F7F7;
        background-color: #f2f2f2;
        font-size: 16px;
        line-height: 1;
        margin: 0;
        padding: 0;
    }
    nav ul{
        list-style: none;
        display: flex;
    }
    nav ul li{
        padding: 0px 20px;
    }
    nav ul li a{
        color: #f7931e;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
    }
    nav ul li:first-child a {
    color: #026369; /* set the color of the first (Home) link */
    }
    nav ul li:first-child a:hover {
    color: #f7931e; /* set the hover color of the first (Home) link */
    }
    nav ul li a:hover{
        color:#026369;
        transition: 1s;
    }
    .logopic img {
        margin-left:30px;
        height: 140px; /* set the height of the logo image to be 100% of the height of its parent element */
    }  
    .login {
        background-color: #026369;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        padding: 10px;
        float: right;
    }
    .login img {
        width: 50px;
        height: 50px;

    }
    .login a {
        text-decoration: none;
        color: #f7931e;
        margin-left: 10px;
        font-weight: bold;
        font-size: 18px;
    }
    </style>
</head>
<body>
            <div class="modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
            </div>
      <!-- Landing Page Starts -->
      <div class="hero">
        <nav>
            <div class="logopic">
                <img src="src/logo.png" alt="PhilTrip logo">
            </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="adventures.php">Adventures</a></li>
                    <li><a href="user_review.php">Blogs and Reviews</a></li>
                    <li><a href="contact_page.php">Contact Us</a></li>
                    <li><a href="about_page.php">About Us</a></li>
                    <li><a href="my_bookings.php">My Bookings</a></li>
                </ul>
                <?php
                    // include "login.php";
                    if(isset($_SESSION['username'])){
                        
                     echo'   <div class="login">
                            <img src="src\user.png" alt="user">
                            <a href="logout.php" style="cursor: pointer">Logout</a>
                        </div>';
                    }
                    else{
                     echo '<div class="login">
                            <img src="src\user.png" alt="user">
                            <a data-bs-toggle="modal" data-bs-target="#login" style="cursor: pointer"> <span style=" color: #f7931e;">Login</span></a>
                        </div>';
                    }


                ?>
                
        </nav>
    </div>
</body>
</html>
<?php

?>