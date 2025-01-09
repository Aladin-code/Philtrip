<?php

    require "head.php";
    
?>

<!-- dark = #032728
light = #026369 -->

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<style>
    .carousel-item img {
        width: 100vw;
        height: 100vh;
        object-fit: cover;
        
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
    h2 {
        text-align: center;
        box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.75);
        color:  #026369;   
    }
    footer {
        color: #026369;
        padding: 0;
        text-align: center;
        bottom: 0;
        width: 100%;
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
    .carousel-inner{
        position:relative;
    }
    .tag{
        position:absolute;
        width: 100%;
        top:45%;
        left: 35%;
        z-index: 100000000000000;
        color: white;
    }
    .slide .image-data {
        position: absolute;
        top: 57%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: left;
        padding:250px;
        width: 100%;
        z-index: 100;
    }
    .image-data h2 {
        font-size: 60px;
        font-weight: 600;
        color: #fff;
    }
    .image-data h4 {
        color: #fff;
        font-size:13px;
    }
    .second {
        width: 95%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 20px;
    }
    .head {
        text-align: center;
        box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.75);
        color:  #026369;
    }
    .card {
        border: none;
        justify-content: center;
    }

    .card img {
        height: 200px;
    }
    .explore_luzon, .explore_visayas, .explore_mindanao {
        /* background-image: url('src/vigan.jpg');
        background-size: cover; */
        border: none;
        border-radius: 10px;
        padding: 10px;
        width: 18rem;
        height: 100%;
        color: white;
    }

    .explore_luzon {
        background-image: url('src/5.jpg');
        background-size: cover;
    }

    .explore_visayas {
        background-image: url('src/2.jpg');
        background-size: cover;
    }

    .explore_mindanao {
        background-image: url('src/6.jpg');
        background-size: cover;
    }

    .card .explore h1 {
        color: white;
        font-size: 40px;
        margin-bottom: -10px;
    }
    .card .explore a {
        text-decoration: none;
        color: white;
        font-size: large;
    }
    #zoom:hover {
        transform: scale(1.02);
        transition: all .5s ease-in-out;
    }
    .container{
        max-width: 1200px;
        margin: 0 auto;
        background: #f2f2f2;
        overflow: auto;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    .popular{
       
        border: 1px solid #ccc;
        width: 240px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        background-color: white;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    .popular img {
        width: 400px;
        height: 147px;
        max-width: 100%;
        border-radius: 6px 6px 0 0;
        transition: transform 0.3s ease-in-out;
    }
    .popular img:hover {
         transform: scale(1.1);
    }
    .desc{
        padding: 5px;
        text-align: center;
        font-size: 18px;
        color:  #026369;
        line-height: 1.5;
    }
    .footer-menu {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        margin-top: 50px;
        font-size: 30px;
        letter-spacing: 1px;
    }
    .footer-menu span {
        font-weight: bold;
        color:  #026369;
        text-transform: uppercase;
    }
    .footer-copy {
        font-size: 14px;
        margin-top: 20px;
    }
    .footer-copy span {
        color: #026369;
    }
    .footer-copy a {
        color:  #026369;
        text-decoration: none;
    }
    .footer-copy a:hover {
        text-decoration: underline;
    }
    .book-btn{
    background:#f7931e;
    padding-left:7px;
    padding-right:9px;
    padding-top:9px;
    padding-bottom:7px;
    border-radius:7px;
    position:absolute;
    bottom:3%;
}
.book-btn{
    text-decoration:none;
    color:white;
}
#custom-class {
    margin: 3px !important; 
    padding:0;
  
}
#row-popular{
    margin:auto;
    
    width:900px;
}
</style>

<body>
    <!-- Landing Page Starts -->
    <?php include"navbar.php"?>;
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">
                <img src="src\slideshow/pic6.jpg" class="d-block" alt="Hundred Islands">
                <div class="image-data">
                    <h2>
                        May you find your home<br />
                        in our trips and<br/>
                        be at peace.
                    </h2>
                    <!-- <h4>enjoy the feeling and worry less...</h4> -->
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="src\slideshow/pic5.jpg" class="d-block" alt="Mayon Volcano">
            </div>
            <div class="carousel-item">
                <img src="src\slideshow/pic4.jpg" class="d-block" alt="Puerto Princesa Underground River">
            </div>
            <div class="carousel-item">
                <img src="src\slideshow/pic3.jpg" class="d-block" alt="Puerto Princesa Underground River">
            </div>
            <div class="carousel-item">
                <img src="src\slideshow/pic2.jpg" class="d-block" alt="Puerto Princesa Underground River">
            </div>
            <div class="carousel-item">
                <img src="src\slideshow/pic1.jpg" class="d-block" alt="Puerto Princesa Underground River">
            </div>
            <div class="carousel-item">
                <img src="src\slideshow/pic.jpg" class="d-block" alt="Puerto Princesa Underground River">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Landing Page Ends -->
    <!-- Second page after landing page with nav -->
    <div class="second">
        <div class="head">
            <h1 style="font-weight: bolder">Where do you want to go?</h1>
            <hr>
        </div>
        <div class="card">
            <!-- Luzon Field -->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center">
                    <div class="explore_luzon">
                        <h1 style="margin-top: 130%; margin-left: 20px;">LUZON</h1>
                        
                    </div>                        
                </div>
                <!-- Image 1 -->
                <?php
                    include 'connection.php';
                    $sql1 = "SELECT * FROM adventure_tbl where Location LIKE '%Luzon%'";
                    $result = $connection->query($sql1);
                    $luzonCount = 0;
                    if($result->num_rows > 0   ){
                        while($row = $result->fetch_assoc()){
                        $tourID = $row['AdventureID'];
                        $Image=$row['Image'];
                        $Name=$row['Name'];
                        $Location = $row['Location'];
                        $Description = $row['Description'];
                        $Price = $row['Price'];
                            echo '<div class="col d-flex justify-content-center" id="zoom">
                                    <div class="card border" style="width: 20rem; height: 100%">
                                        <img src="src/'.$Image.'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <!-- concatenate yung name ng destination -->
                                            <h2 style="font-weight: bold">'.$Name.'</h2>
                                            <!-- concatenate yung description -->
                                            <p>'.$Description.'</p>
                                            <!-- concatenate yung price -->
                                            <h3 style="font-weight: bold">₱'.$Price.'</h3>
                                            <div style="height:50px;"></div>
                                            <a href="user_booking.php?tourID='.$tourID.'" class=" book-btn" >Book now</a>
                                        </div>
                                    </div>
                                </div>';
                                $luzonCount++;
                                if($luzonCount == 3){
                                    break;
                                }
                        }
                    }
?>
               
            
            <!-- Visayas Field -->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center">
                    <div class="explore_visayas">
                        <h1 style="margin-top: 130%; margin-left: 20px;">VISAYAS</h1>
                        
                    </div>                        
                </div>
                <!-- Image 1 -->
                <?php
                    include 'connection.php';
                    $sql1 = "SELECT * FROM adventure_tbl where Location LIKE '%Visayas%'";
                    $result = $connection->query($sql1);
                    $visCount = 0;
                    if($result->num_rows > 0  ){
                        while($row = $result->fetch_assoc()){
                            $tourID = $row['AdventureID'];
                        $Image=$row['Image'];
                        $Name=$row['Name'];
                        $Location = $row['Location'];
                        $Description = $row['Description'];
                        $Price = $row['Price'];
                            echo '<div class="col d-flex justify-content-center" id="zoom">
                                    <div class="card border" style="width: 20rem; height: 100%">
                                        <img src="src/'.$Image.'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <!-- concatenate yung name ng destination -->
                                            <h2 style="font-weight: bold">'.$Name.'</h2>
                                            <!-- concatenate yung description -->
                                            <p>'.$Description.'</p>
                                            <!-- concatenate yung price -->
                                            <h3 style="font-weight: bold">₱'.$Price.'</h3>
                                            <div style="height:50px;"></div>
                                            <a href="user_booking.php?tourID='.$tourID.'" class=" book-btn">Book now</a>
                                        </div>
                                    </div>
                                  </div>';
                                  $visCount++;
                                  if($visCount == 3){
                                      break;
                                  }
                        }
                    }
                ?>
               
            <!-- Mindanao Field -->
            <div class="row mt-3">
                <div class="col d-flex justify-content-center">
                    <div class="explore_mindanao">
                        <h1 style="margin-top: 130%; margin-left: 20px;">MINDANAO</h1>
                       
                    </div>                        
                </div>
                <!-- Image 1 -->
                <?php
                    include 'connection.php';
                    $sql1 = "SELECT * FROM adventure_tbl where Location LIKE '%Mindanao%'";
                    $result = $connection->query($sql1);
                    $minCount = 0;
                    if($result->num_rows > 0  ){
                        while($row = $result->fetch_assoc()){
                             $tourID = $row['AdventureID'];
                        $Image=$row['Image'];
                        $Name=$row['Name'];
                        $Location = $row['Location'];
                        $Description = $row['Description'];
                        $Price = $row['Price'];
                            echo '<div class="col d-flex justify-content-center" id="zoom">
                                    <div class="card border" style="width: 20rem; height: 100%">
                                        <img src="src/'.$Image.'" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <!-- concatenate yung name ng destination -->
                                            <h2 style="font-weight: bold">'.$Name.'</h2>
                                            <!-- concatenate yung description -->
                                            <p>'.$Description.'</p>
                                            <!-- concatenate yung price -->
                                            <h3 style="font-weight: bold">₱'.$Price.'</h3>
                                            <div style="height:50px;"></div>
                                            <a href="user_booking.php?tourID='.$tourID.'" class=" book-btn">Book now</a>
                                        </div>
                                    </div>
                                  </div>';
                            $minCount++;
                            if($minCount==3){
                                break;
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- Popular Destination -->
     <div class="second" style="">
    <h2 style="font-weight: bolder;padding-bottom: 15px; margin-bottom: 25px"> Popular Destination</h2>
    <div class="container" style="background: white">

    <div class="row" id="row-popular" >
        <?php
        include 'connection.php';
        $sql = "SELECT * FROM adventure_tbl where Price < 5000 ";
        $result = $connection->query($sql);

        while($row = $result->fetch_assoc()){
            $name = $row['Name'];
            $image = $row['Image'];
            echo '<div class="col  "id="custom-class">
             <div class="popular" style="margin-top: 10px; margin-bottom: 10px">
                    <img src="src/'.$image.'">
                    <div class="desc">'.$name.'</div>
             </div>
            </div>';
        }
           

        ?>
    </div>
       

     

<!----Footer---->
        <footer>
    <div class="footer-menu">
        <span>Explore.</span> <span>Dream.</span> <span>Discover.</span>
    </div>

    <div class="footer-copy">
        <p>&copy; 2023 PhilTrip.com. All rights reserved. </p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>