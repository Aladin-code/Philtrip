<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Adventures</title>
    <style>
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
    .back{
        left:8%;
        top:4%;
        width:80px;
    }
    .notFound{
        height:80vh;
        width:100%;
        background:#E9ECEF;
        display:flex;
        justify-content:center;
        align-items:center;
        
    }
    .notFound p{
        font-size:30px;
    }
    .book-btn{
    background:#f7931e;
    padding-left:7px;
    padding-right:9px;
    padding-top:7px;
    padding-bottom:7px;
    border-radius:7px;
    position:absolute;
    bottom:5%;
    right:5%;
}
.book-btn{
    text-decoration:none;
    color:white;
}
    </style>
</head>
<body>
<div class="container-fluid">



<div class="container" id="searchQuery">

        <div class="head mt-2">
        <button type="button" onclick="location.href='adventures.php'" class="btn btn-success position-absolute back">back</button>
            <h1 style="font-weight: bolder">Search result for "<?php echo $_POST['search'];?>"</h1>
            <hr>
        </div>
        
    <div class="row mb-3 " id="row" style="margin-left: auto; margin-right: auto">
        <?php
        include "connection.php";
      
       
        if(isset($_POST['search'])){
            $search = $_POST['search'];
            $sql = "SELECT * FROM adventure_tbl where Location LIKE '%$search%' OR Name LIKE '%$search%' OR Description LIKE '%search%' OR Price <= '$search'";
            $result = $connection->query($sql);
            
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
                            <div style="height:28rem">
                                <img src="src/'.$Image.'" class="card-img-top" alt="'.$Name.'">
                                <div class="card-body">
                                <div style="height:104px">
                                            <p style="font-size:20px;margin-bottom:5px;"><b>'.$Name.'</b></p>
                                            <p style="font-size:15px;margin-bottom:px;">'.$Location.'</p>';
                                     if($Discount > 0){
                                        $discountedPrice = $Price - ($Price * $Discount / 100);
                                        echo '<p style="font-size:15px;margin-bottom:0px;color:#757575;font-weight:1rem;"><del>₱'. $Price.'</del></p>';
                                        echo '<p style=" font-size:20px;margin-bottom:13px;margin-right:5px;"> <b>₱'.$discountedPrice. '</b></p>';
                                     }else{
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
            
        }else{
           echo '<div  class="container notFound ">
           <p>Nothing found, search again.</p>
   </div>';
        }   
    }
        ?>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>


