
<?php
    include 'connection.php';
     if(isset($_GET['updateid'])){
        $user_id = $_GET['updateid'];
        $sql = " SELECT * from adventure_tbl where AdventureID = '$user_id'";
        $result = $connection->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $AdventureID = $row['AdventureID'];
                    $Image=$row['Image'];
                    $storedFilePath = 'img/destination/' . $Image;
                    $Name=$row['Name'];
                    $Location = $row['Location'];
                    $Description = $row['Description'];
                    $Price = $row['Price'];
                    $Discount = $row['Discount'];
                    $service1 = $row['Tour_Guide'];
                    $service2 = $row['Food_and_Drinks'];
                    $service3 = $row['Personal_Vehicle'];
                    $service4 = $row['Toileteries'];
                    $service5 = $row['Accomodations'];
                    $service6 = $row['Equipment'];
                    $discountedPrice = $Price - ($Price * $Discount); 
                }
            }
            
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="modal" id="updateModal">

            <div class="modal-dialog modal-xl">
                <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"> Update Details</h4>
                    <button type="button" id="close" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                   
                <div id="cont" class="cont">
                    
                            
                     <form action="update.php?updateid=<?php echo  $user_id; ?>" method="post">

                            <div class="row">
                                <div class="col">
                                    <div class="view" id="view"></div>
                                    
                                    <input type="file" name="image" id="image" required>
                                       
                                    </div>
                            
                                <div class="col">
                                    <h1>Destination Details</h1>
                                        <div class="selection">
                                            <div class="row">
                                                <div class="col col-2">
                                                    <label>Destination</label>
                                                </div>
                                                <div class="col">
                                                <input type="text" name="destination" id="destination" value="<?php echo $Name; ?>">

                                                </div>
                                            </div>
                                    <!-- Location -->
                                            <div class="row">
                                                <div class="col col-2">
                                                     <label>Location</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="location" id="location" value="<?php echo $Location;?>">
                                                </div>
                                            </div>
                                    <!-- Description  -->
                                            <div class="row">
                                                <div class="col col-2">
                                                    <label>Description</label>
                                                </div>
                                                 <div class="col">
                                                    <textarea name="description" id="description"><?php echo $Description ?></textarea>
                                                </div>
                                            </div>
                                    <!-- Services Offered -->
                                            <div class="services">
                                                <h5>Services Offered</h5    >
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" name="tour_guide" id="tour_guide" value="Tour Guide" <?php echo $service1 ?>>
                                                             <label>Tour Guide</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="accomodation" id="accomodation" value="Accomodation" <?php echo $service5 ?>>
                                                            <label>Accomodation</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="food_drinks" id="food_drink" value="Food & Drinks" <?php echo $service2 ?>>
                                                            <label>Food & Drinks</label>
                                                        </div>
                                                     </div>
                                        
                                                     <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" name="equipment" id="equipment" value="Equipment" <?php echo $service6 ?>>
                                                            <label>Equipments</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="personal_vehicle" id="personal_vehicle" value="Personal Vehicle" <?php echo $service3 ?>>
                                                            <label>Personal Vehicle</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="toileteries" id="toiletries" value="Toiletries" <?php echo $service4 ?>>
                                                            <label>Toiletries</label>
                                                        </div>
                                                     </div>
                                            </div>
                                    <!-- Price and Discount -->
                                            <div class="row">
                                                <div class="col col-2">
                                                    <label>Price</label>
                                                </div>
                                                <div class="col">
                                                    <input type="number" step="0.01" name="price" id="price" placeholder="₱ 00.00" value="<?php echo $Price; ?>">
                                                </div>
                                                <div class="col col-2">
                                                    <label>Discount</label>
                                                </div>
                                                <div class="col">
                                                    <input type="number" step="0.01" name="discount" id="discount" placeholder="00.00 %" value="<?php echo $Discount; ?>">
                                                </div>
                                            </div>
                                </div>
                            </div>
                    </div>
            <div class="add-new">
                <input type="submit" name="update" value="UPDATE" id="new" data-bs-toggle="modal" data-bs-target="#updateModal">
            </div>
        </form>
    </div>
               

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" onclick="location.href='tours_copy.php'"  class="btn btn-danger">Close</button>
                </div>
                
                </div>
            </div>
            </div>
            </div>
    <?php include'tours_copy.php';?>

<script>
   $(document).ready(function(){
   $('#updateModal').modal('show');
    });
</script>
<script>
    
const closeButton = document.getElementById("close");
function close(){
  window.location.href = "tours.php";
}
closeButton.addEventListener("click", close);

</script>
</body>
</html>