<?php
    require "connection.php";

    if(isset($_POST['update']) || isset($_GET['updateid'])) {
        $id = $_GET['updateid'];
        $image = $_POST['image'];
        $destination = $_POST['destination'];
        $location = $_POST['location'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $discount = $_POST['discount'];
     
        
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

        
 
        
       
        $query = "UPDATE adventure_tbl set Image='$image',Name='$destination',Location='$location',Description='$description',Price='$price',Discount='$discount', Tour_Guide = '$tour_guide',Accomodations = ' $accomodation', Food_and_Drinks = '$food_drinks',Equipment = '   $equipment', Personal_Vehicle = '$personal_vehicle', Toileteries='$toileteries' where AdventureID='$id'";
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
    } 
    

?>