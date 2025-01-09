<?php
  include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Adventures</title>
    <style>
  *{
        padding:0;
        margin:0;
    }
    
    .back{
        padding:0;
        overflow-x:hidden;
    }
    
    .carousel-item {
        height: 600px;
    }
    
    .carousel-item img {
        width: 100%;
        height: 100vh;
        object-fit: cover;
    }
    .slide .form-search {
        position: absolute;
        top: 34%;
        bottom: 0;
        left: 20%;
        right: 0;
        text-align: center;
        margin: auto;
        z-index: 100;
}
    .slide .form-search.carousel-caption {
        text-align: left;
        width: 100%;
        z-index: 100;
    }
    
    .slide .form-search h1 {
        font-size: 3rem;
    }
    
    .slide .form-search p {
        font-size: 1rem;
    }
    .navbar{
        background:none;
    }
    .search{
        background:rgba(255,255,255,0.75);
    }
    .btnsearch{
        transition:ease-in-out .5s;
    }
    .btnsearch:hover{
        background:#198754;
        color:white;
        border:none;
        transition:ease-in-out .5s;
    }
    .head {
        text-align: center;
        box-shadow: 0px 5px 5px -5px rgba(0, 0, 0, 0.75);
        color:  #026369;
    }
    .card-img-top {
  height: 230px; /* set a fixed height */
  object-fit: cover; /* resize the image to cover the container */
}
.col {
    padding-right: 0.1rem;
    padding-left: 0.1rem;
    
}
.row{
    width:100%;
    margin:auto;
    justify-content: center;
}
#zoom{
    margin-right:0;
    transition: all .5s ease-in-out;
}
#zoom:hover {
        transform: scale(1.02);
        transition: all .5s ease-in-out;
    }
/* .card-body{
    margin:0;
    padding:0;
} */.book-btn{
    background:#f7931e;
    padding-left:7px;
    padding-right:9px;
    padding-top:9px;
    padding-bottom:7px;
    border-radius:7px;
    position:absolute;
    bottom:5%;
}
.book-btn{
    text-decoration:none;
    color:white;
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
    </style>
</head>
<body>
<?php include'navbar.php';?>
    <div class="container-fluid p-0 back">
         
          <div id="carouselExampleAutoplaying" class="carousel slide" style="width: 100%" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="src/img/img1.jpg" class="d-block w-100" alt="...">
                </div>
               
                <div class="carousel-item">
                    <img src="src/img/img2.jpg" class="d-block w-100" alt="...">
                </div>
                
                <div class="carousel-item">
                    <img src="src/img/img3.jpg" class="d-block w-100" alt="...">
                </div>
        </div>
            
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                </button>    
                
                <div class="form-search carousel-caption" action="adventures.php" method="post">
                    <h1 class="text-light mx-3" style="font-weight: bold">EXPLORE.DREAM.DISCOVER</h1>
                    <p class="text-light mx-3 ">Experience the thrill of a lifetime</p>
                   
                    <nav class="navbar">
                        <div class="container-fluid">
                        <form class="d-flex" role="search" id="search-form" action="search.php" method="post">
                        <input name="search" id="inputSearch" class="form-control search" type="input" placeholder="Search" aria-label="Search" style="font-size: 20px; padding: 10px;width:500px;">

                                <input type="submit" name="searchBtn" id="search" class="btn btnsearch btn-outline-light mx-2" value="Search" onclick="window.location.href='search.php'" >

                        </form>
                        </div>
                    </nav>
                </div>

        </div>
    
        <div id="myDiv" style="display: none;">
  This is the div that will be shown when the input is clicked.
</div>
    <div class="container tour-packages" id="tour-packages">
        <div class="head mt-2">
            <h1 style="font-weight: bolder">All tour packages</h1>
            <hr>
        </div>
            <div class="row mb-3 " id="row" style="margin-left: auto; margin-right: auto">
                <?php
              
                $sql1 = "SELECT * FROM adventure_tbl ";
                $result = $connection->query($sql1);
            
                if($result->num_rows > 0  ){
                    while($row = $result->fetch_assoc()){
                        $tourID = $row['AdventureID'];
                        $Image=$row['Image'];
                        $Name=$row['Name'];
                        $Price = $row['Price'];
                        $Location = $row['Location'];
                        $Discount = $row['Discount'];
                        echo '<div class="col-md-3 mt-3 mb-3 d-flex justify-content-center" id="zoom">
                            <div class="card" style="width:17rem;">
                                <div style="height:27rem">
                                    <img src="src/'.$Image.'" class="card-img-top" alt="'.$Name.'">
                                    <div class="card-body">
                                        <div style="height:104px">
                                            <p style="font-size:20px;margin-bottom:7px;"><b>'.$Name.'</b></p>
                                            <p style="font-size:15px;margin-bottom:13px;">'.$Location.'</p>';
                                     if($Discount > 0){
                                        $discountedPrice = $Price - ($Price * $Discount / 100);
                                        echo '<p style="font-size:15px;margin-bottom:0px;color:#757575;font-weight:1rem;"><del>₱'. $Price.'</del></p>';
                                        echo '<p style=" font-size:20px;margin-bottom:13px;margin-right:5px;"> <b>₱'.$discountedPrice. '</b></p>';
                                     } else {
                                        echo '<p style=" font-size:20px;margin-bottom:13px;margin-right:5px;"> <b>₱'.$Price. '</b></p>';
                                     }
                                     echo'       
                                        </div>
                                        <p class="">
                                        <a href="user_booking.php?tourID='.$tourID.'" class=" book-btn">Book now</a>
                                        </p>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>';
                        
                }
            }
                ?>
        </div>
</div>
<footer>
    <div class="footer-menu">
        <span>Explore.</span> <span>Dream.</span> <span>Discover.</span>
    </div>

    <div class="footer-copy" style="text-align: center">
        <p>&copy; 2023 PhilTrip.com. All rights reserved. </p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</footer>
</body>
<!-- <script>
  const myInput = document.getElementById("inputSearch");
  const myDiv = document.getElementById("myDiv");
  
  myInput.addEventListener("focus", function() {
  myDiv.style.display = "block";
});

myInput.addEventListener("blur", function() {
  myDiv.style.display = "none";
});
</script> -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>


</body>
</html>