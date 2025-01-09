<?php
    include 'connection.php';
    if(isset($_GET['tourID'])){
        $tourID = $_GET['tourID'];
        $sql = "SELECT * FROM adventure_tbl where AdventureID = '$tourID'";
        $result = $connection->query($sql);
      
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $img = $row['Image'];
                    $destinationName = $row['Name'];
                    $description = $row["Description"];
                    $discount = $row['Discount'];
                    $price = $row['Price'];

                    echo "<style>body{background-image: url('src/".$img."'); background-size: cover}</style>";
                    
                    $tour_guide = $row['Tour_Guide'];
                    if(  $tour_guide == "checked"){
                        $displayTour = "block";
                    }else{
                        $display = "none";
                    }


                    $food_drinks = $row['Food_and_Drinks'];
                    if(  $food_drinks == "checked"){
                        $displayFood = "block";
                    }else{
                        $displayFood = "none";
                    }


                    $personal_vehicle = $row['Personal_Vehicle'];
                    if(   $personal_vehicle == "checked"){
                        $displayVehicle= "block";
                    }else{
                        $displayVehicle = "none";
                    }

                    $toileteries = $row['Toileteries'];
                    if(   $toileteries == "checked"){
                        $displayToileteries= "block";
                    }else{
                        $displayToileteries= "none";
                    }
                    
                    $accomodation = $row['Accomodations'];
                    if(   $accomodation == "checked"){
                        $displayAccomodation= "block";
                    }else{
                        $displayAccomodation= "none";
                    }
                    $equipments = $row['Equipment'];
                    if(   $equipments == "checked"){
                        $displayEquipments= "block";
                    }else{
                        $displayEquipments= "none";
                    }
                   
                }
            }
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>PhilTrip PH</title>
    <!-- Tab Icon -->
    <link rel="icon" href="src/LOGO.png" type="image/icon type">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">

    <!-- Internal CSS -->
    <style>
        /* body {
            background-image: url('src/Calle Crisologo.jpg');
            background-size: cover;
        } */

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .cont {
            width: 60%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
            margin-bottom: 20px;
            padding: 20px;
            background: rgba(255,255,255, .9);
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .content {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        #quantity, #stay {
            width: 150px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background: #E8F0FE;
            text-align: center;
        }

        #date {
            width: 75%;
            height: 40px;
            text-align: center;
            border: none;
            background: #E8F0FE;
            padding-right: 20px;
            border-radius: 10px;
        }

        input[type="checkbox"] {
            display: none;
        }

        input[type="checkbox"] + p {
            transition: ease-in-out .5s;
            border: 2px solid rgba(0,0,0,0);
            border-radius: 10px;
        }

        input[type="checkbox"]:checked + p {
            border: 2px solid black;
            transition: ease-in-out .5s;
            font-weight: bold;
        }

        .services p {
            width: 75%;
            margin-left: auto;
            background: #E8F0FE;
            margin-right: auto;
        }

        #add_btn {
            height: 40px;
            width: 40px;
            border: none;
            border-radius: 10px;
        }

        .submit {
            text-align: center;
        }

        #book {
            width: 50%;
            height: 50px;
            border: 2px solid yellowgreen;
            border-radius: 10px;
            background: rgba(0,0,0,0);
            color: yellowgreen;
            font-size: 24px;
            transition: ease-in-out .5s;
        }

        #book:hover {
            background: yellowgreen;
            border: 2px solid rgba(0,0,0,0);
            transition: ease-in-out .5s;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container-fluid">

    
    <form action="add_booking.php" method="post">
        <div class="cont border">
        <button class="btn btn-danger" type="button" onclick="location.href='adventures.php'">Back</button>
            <div class="header">
                <!-- concatenate the destination -->
                <h1 style="text-align: center;"><?php echo $destinationName?></h1>
                <input type="hidden" name="destination" value="taal">
                <hr style="width: 75%; margin-left: auto; margin-right: auto">

                <input type="text" name="destination" style="display: none" value="<?php echo $destinationName;?>">
                <!-- Concatenate the description -->
                <p style="text-align: center"><?php echo $description;?></p>
                <hr style="width: 75%; margin-left: auto; margin-right: auto">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col">
                        <!-- Service Offered -->
                        <div class="services">
                            <h5 style="text-align: center">Offered Services</h5>
                            <h6>Please select: </h6>
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="display:<?php echo $displayTour?>;">
                                        <label>
                                            <input type="checkbox" name="tour_guide" id="tour_guide" data-price="700" value="700">
                                            <p style="padding: 10px; text-align: center">Tour Guide (₱700)</p>
                                        </label>
                                    </div>
                                    <div class="row" style="display:<?php echo $displayAccomodation;?>;">
                                        <label>
                                            <input type="checkbox" name="accomodation" id="accomodation" data-price="1700" value="1700">
                                            <p style="padding: 10px; text-align: center">Accomodation (₱1,700)</p>
                                        </label>
                                    </div>
                                    <div class="row" style="display:<?php echo $displayFood;?>;">
                                        <label>
                                            <input type="checkbox" name="food_drinks" id="food_drink" data-price="500" value="500">
                                            <p style="padding: 10px; text-align: center">Food & Drinks (₱500)</p>
                                        </label>
                                    </div>
                                    <div class="row" style="display:<?php echo $displayEquipments;?>;">
                                        <label>
                                            <input type="checkbox" name="equipment" id="equipment"  data-price="200" value="200">
                                            <p style="padding: 10px; text-align: center">Equipments (₱200)</p>
                                        </label>
                                    </div>
                                    <div class="row" style="display:<?php echo $displayVehicle;?>;">
                                        <label>
                                            <input type="checkbox" name="personal_vehicle" id="personal_vehicle"  data-price="2200" value="2200">
                                            <p style="padding: 10px; text-align: center">Personal Vehicle (₱2,200)</p>
                                        </label>
                                    </div>
                                    <div class="row" style="display:<?php echo $displayToileteries;?>;">
                                        <label>
                                            <input type="checkbox" name="toiletries" id="toiletries"  data-price="300" value="300">
                                            <p style="padding: 10px; text-align: center">Toiletries (₱300)</p>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <!-- number of pax -->
                        <div class="input-line" style="text-align: center; margin-bottom: 20px;">
                            <label for="quantity" style="font-weight: bold; margin-bottom: 10px;">Number of pax</label> <br>
                            <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" step="1">
                            <input type="hidden" id="quantity"  value="1" min="1" max="100" step="1">
                        </div>
                        <!-- Tour Date -->
                        <div class="input-line" style="text-align: center; margin-bottom: 20px;">
                            <label for="tour-date" style="font-weight: bold; margin-bottom: 10px;">Select Date</label> <br>
                            <input type="date" id="date" name="date">
                        </div>
                        <!-- number of stays -->
                        <div class="input-line" style="text-align: center; margin-bottom: 40px;">
                            <label for="quantity" style="font-weight: bold; margin-bottom: 10px;">No of stay(Days)</label> <br>
                            <input type="number" id="stay" value="1" name="stay" min="1" max="100" step="1">
                            <input type="hidden" id="stay" value="1" min="1" max="100" step="1">
                        </div>
                        <hr style="width: 75%; margin-left: auto; margin-right: auto;">
                       
                       
                        <!-- total price -->
                        <?php 
                        if($discount > 0){
                            $discountedPrice = $price - ($price * $discount / 100);
                        echo '  <label style="font-weight: bold">Subtotal:</label>
                        <div class="input-line" style="text-align: right;">
                            <label for="total-price" >PHP</label>
                            <!-- Concatenate the desrination price -->
                            <span id="total-price" data-value="'.$discountedPrice.'" style="font-size: 90px; "></span><br>
                            <input type="hidden" id="total-price" data-value="'.$discountedPrice.'" name="total-price">
                            <label for="total-price" >PHP</label>
                            <span id="discounted-price" data-value="'.$price.'" style="font-size: 30px; "><del>'.$price.'</de></span>
                            <input type="hidden" id="total-payable" name="totals" value="">
                        </div>';
                        }
                        else{
                            echo '  <label style="font-weight: bold">Subtotal:</label>
                            <div class="input-line" style="text-align: right;">
                                <label for="total-price" >PHP</label>
                                <!-- Concatenate the desrination price -->
                                <span id="total-price" data-value="'.$price.'" style="font-size: 90px; "></span><br>
                                <input type="hidden" id="total-payable" name="totals" value="">
                            </div>';
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <!-- submit button -->
                <div class="submit">
                    <input type="submit" id="book" name="book" value="Book Now">
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function(){
        var price = 0;
        var initial = document.getElementById("total-price");
        //Function to update total price
        function updatePrice(){
            var quantity = $("#quantity").val();
            var stay = $("#stay").val();
            var initialPrice = initial.getAttribute("data-value");
            var pricePerDay = price + (quantity * initialPrice) ;
            var total = pricePerDay * stay;
            $("#total-price").text(total);
          
            
        }

        //Function to calculate total price
        function calculatePrice(){
            price = 0;
            $("input[type='checkbox']:checked").each(function(){
                var thisPrice = $(this).data("price");
                price += thisPrice;
            });
            updatePrice();
        }

        //Calculate price when a checkbox is checked or unchecked
        $("input[type='checkbox']").change(function(){
            calculatePrice();
        });

        //Calculate price when quantity is changed
        $("#quantity").change(function(){
            updatePrice();
        });

        $("#stay").change(function(){
            updatePrice();
        });

        //Calculate price on page load
        calculatePrice();
    });
   
$(function() {
  var total = $("#total-price").text();
  $("#total-payable").val(total);
});

</script>
