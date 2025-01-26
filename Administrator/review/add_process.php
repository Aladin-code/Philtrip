<?php
    require "connection.php";

    if(isset($_POST['add'])) {
        $image = $_POST['image'];
        $destination = $_POST['destination'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
        $status = 'unarchive';


        if(isset($_POST['tour_guide'])){
            $tour_guide = "checked";
        }
        else{
            $tour_guide = "unchecked";
        }

        if(isset($_POST['accomodation'])){
            $accomodation = "checked";
            
        }else{
            $accomodation = "unchecked";
        }


        if(isset($_POST['food_drinks'])){
            $food_drinks = "checked";
            
        }else{
            $food_drinks = "unchecked";
        }

        if(isset($_POST['equipment'])){
            $equipment = "checked";
            
        }else{
            $equipment = "unchecked";
        }

        if(isset($_POST['personal_vehicle'])){
            $personal_vehicle = "checked";
            
        }else{
            $personal_vehicle = "unchecked";
        }
        if(isset($_POST['toileteries'])){
            $toileteries = "checked";
            
        }else{
            $toileteries = "unchecked";
        }


        $query = "INSERT INTO adventure_tbl (Image,Name,Location,Description,Price,Discount,Tour_Guide,Accomodations,Food_And_Drinks,Equipment,Personal_Vehicle,Toileteries,Status) VALUES ('$image','$destination','$location','$description',' $price','$discount','$tour_guide','$accomodation','$food_drinks','$equipment','$personal_vehicle', '$toileteries','$status')";
        $result = $connection->query($query);

        if($result){
            include 'tours_copy.php';
            echo "<script type='text/javascript'> 
                    $(document).ready(function(){
                        $('#successalert').modal('show');
                        $('#successalert').on('hidden.bs.modal', function () {
                            window.location.href = 'tours_copy.php';
                        });
                    });
                  </script>";
        } else {
            echo "<script type='text/javascript'> alert('Failed to insert services!') </script>";
        }
    } else {
        include 'tours.php';
    }
?>
