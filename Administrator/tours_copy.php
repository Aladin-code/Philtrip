

<!DOCTYPE html>
<html lang="en">
<head>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        .content{
        margin-left:280px;
        padding:20px;
    }
    
#addTour{
            background-color: #9EAF27;
            color: white;
            border: none;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 4px;
            cursor: pointer;
            margin:2px;
}
#card{
    border:1px solid yellow;
    width:100%;
    margin-top:10%;
    display:none;
    
}

#close{
    border:none;
    background:none;
}
#cont {
        
        max-width: 100%;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        background-color: #026369;
        border: none;
        border-radius: 10px;
        color: #FFFFFF;
        display:block;
        
    }

    .view {
        height: 300px;
        background-color: rgba(255, 255, 255);
        margin-bottom: 10px;
        border-radius: 10px;
        border: none;
        background-size: cover;
    }

    .view backgroundImage {
        background-size: cover;
    }

    #cont h1 {
        font-size: 40px;
        text-align: center;
    }

    #cont input {
        padding-left: 10px;
    }

    #destination, #location, #price, #discount{
        width: 100%;
        height: 40px;
        border-radius: 10px;
        border: none;
        background-color: rgb(255, 255, 255);
        margin-top: 5px;
        margin-bottom: 5px;
    }

    textarea {
        resize: none;
        padding: 5px;
        height: 130px;
        width: 100%;
        border: none;
        border-radius: 10px;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .selection .row {
        align-items: center;
    }

    .services {
        padding: 10px;
        background-color: white;
        border: none;
        border-radius: 10px;
        color: #28B498;
        margin-bottom: 5px;
    }

    .services h5 {
        text-align: center;
    }

    .add-new {
        text-align: center;
        font-weight: 300px;
    }

    .add-new input {
        padding: 5px;
        width: 40%;
        height: 50px;
        margin-top: 10px;
        margin-bottom: 20px;
        border-radius: 10px;
        border: none;
        border: 2px solid white;
        background-color: #28B498;
        color: white;
    }

    .add-new input:hover {
        background-color: white;
        color: #28B498;
        transition: ease-in-out .25s;
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
    .img{
            max-width:100%;
        }
        table div{
            width:200px;
        }
        table, thead, th, tr, td {
        text-align: center;
    }
        
    </style>
</head>
<body>
          <!--success alert-_>
         <!-- Modal -->
    <div class="modal fade" id="successalert" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header border-0">
                
            </div>
            <div class="modal-body">
            <div class="container  justify-content-center align-items-center text-center">
            <span style="font-size: 4em; color:#BFE6A9;"><i class="bi bi-check-circle"></i></span>



                <div class="container-fluid">
                <p class="h3">Success alert</p>
                </div>
</div>

            </div>
            <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
        <!-- Add tours Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered ">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add new adventure</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div id="cont" class="cont">
                     <!-- <button id="close" onclick="hideCard()"><i class="bi bi-x-square-fill"></i></button><br><br> -->
                            
                        <form action="add_process.php" method="post">
                            <div class="row">
                                <div class="col">
                                    <div class="view" id="view"></div>
                                            <input type="file" name="image" id="image">
                                    </div>
                            
                                <div class="col">
                                    <h1>Destination Details</h1>
                                        <div class="selection">
                                            <div class="row">
                                                <div class="col col-2">
                                                    <label>Destination</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="destination" id="destination">
                                                </div>
                                            </div>
                                    <!-- Location -->
                                            <div class="row">
                                                <div class="col col-2">
                                                     <label>Location</label>
                                                </div>
                                                <div class="col">
                                                    <input type="text" name="location" id="location">
                                                </div>
                                            </div>
                                    <!-- Description  -->
                                            <div class="row">
                                                <div class="col col-2">
                                                    <label>Description</label>
                                                </div>
                                                 <div class="col">
                                                    <textarea name="description" id="description"></textarea>
                                                </div>
                                            </div>
                                    <!-- Services Offered -->
                                            <div class="services">
                                                <h5>Services Offered</h5    >
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" name="tour_guide" id="tour_guide" value="Tour Guide">
                                                             <label>Tour Guide</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="accomodation" id="accomodation" value="Accomodation">
                                                            <label>Accomodation</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="food_drinks" id="food_drink" value="Food and Drinks">
                                                            <label>Food & Drinks</label>
                                                        </div>
                                                     </div>
                                        
                                                     <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" name="equipment" id="equipment" value="Equipments">
                                                            <label>Equipments</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="personal_vehicle" id="personal_vehicle" value="Personal Vehicle">
                                                            <label>Personal Vehicle</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="toileteries" id="toileteries" value="Toileteries">
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
                                                    <input type="number" step="0.01" name="price" id="price" placeholder="₱ 00.00">
                                                </div>
                                                <div class="col col-2">
                                                    <label>Discount</label>
                                                </div>
                                                <div class="col">
                                                    <input type="number" step="1" name="discount" id="discount" placeholder="0%">
                                                </div>
                                            </div>
                                </div>
                            </div>
                    </div>
            <div class="add-new">
                <input type="submit" name="add" value="ADD" id="new"  data-bs-toggle="modal" data-bs-target="#successalert">
            </div>
        </form>
            </div>

 
                </div>
                </div>
           
            </div>
        </div>
</div>

<!--Update-->




   <?php include'sidebar.php';?>
   <section class="content">
        <h1>Tours And Packages</h1>
        <hr>
        <div class="container">
       
        <div class="row justify-content-end m-3">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: 200px;">
        New adventure
        </button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Destination</th>
                    <th scope="col">Location</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once "connection.php";

                    class adventure {
                        private $id;
                        private $name;
                        private $location;
                        private $description;
                        private $price;
                        private $discount;
                        private $image;

                        public function __construct($id, $name, $location, $description, $price, $discount, $image) {
                            $this->id = $id;
                            $this->name = $name;
                            $this->location = $location;
                            $this->description = $description;
                            $this->price = $price;
                            $this->discount = $discount;
                            $this->image = $image;
                        }

                        public function getId() {
                            return $this->id;
                        }
                    
                        public function getName() {
                            return $this->name;
                        }
                    
                        public function getLocation() {
                            return $this->location;
                        }
                    
                        public function getDescription() {
                            return $this->description;
                        }
                    
                        public function getPrice() {
                            return $this->price;
                        }
                    
                        public function getDiscount() {
                            return $this->discount;
                        }
                    
                        public function getImage() {
                            return $this->image;
                        }
                    }

                    class AdventureController {
                        private $connection;
                    
                        public function __construct($connection) {
                            $this->connection = $connection;
                        }
                    
                        public function getAllAdventures() {
                            $adventures = array();
                            $sql = "SELECT * FROM adventure_tbl WHERE Status = 'unarchive' ORDER BY AdventureID DESC";
                            $result = $this->connection->query($sql);
                    
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $adventure = new Adventure($row['AdventureID'], $row['Name'], $row['Location'], $row['Description'], $row['Price'], $row['Discount'], $row['Image']);
                                    array_push($adventures, $adventure);
                                }
                            }else {
                                echo "<h3 style='text-align: center; margin-top: 23%; color: lightgray'>No adventures found.</h3>";
                                echo "<style>table {display: none;}</style>";
                            }
                    
                            return $adventures;
                        }
                    }

                    $adventureController = new AdventureController($connection);
                    $adventures = $adventureController->getAllAdventures();

                    foreach ($adventures as $adventure) {
                        echo "<tr>";
                        echo "<td class='align-middle'><div id='imgcont'><img class='img' src='img/destination/".$adventure->getImage()."'></div></td>";
                        echo "<td class='align-middle'>".$adventure->getName()."</td>";
                        echo "<td class='align-middle'>".$adventure->getLocation()."</td>";
                        echo "<td class='align-middle'>".$adventure->getDescription()."</td>";
                        echo "<td class='align-middle'>".$adventure->getPrice()."</td>";
                        echo "<td class='align-middle'>".$adventure->getDiscount()."</td>";
                        echo "<td><a class='btn btn-success mb-3' href='update_process.php?updateid=".$adventure->getId()."'>Update</a>";
                        // echo "<a class='btn btn-warning' href='archive_process.php?archiveid=".$adventure->getId()."'>Archive</a></td>";
                        echo "<form action='archive_process.php' method='post'>";
                        echo "<input class='btn btn-warning' type='text' name='archiveId' value='".$adventure->getId()."' style='display: none'>";
                        echo "<input class='btn btn-warning' type='submit' name='archive' value='Archive'>";
                        echo "</form></td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>

        </div>
        <!-- //<input type="submit" name="add" value="ADD" id="new" onclick="addUser()" data-bs-toggle="modal" data-bs-target="#successalert"> -->
   </section>
   
        <script>
    const fileInput = document.getElementById('image');
    const fileDisplayArea = document.getElementById('view');

    fileInput.addEventListener('change', function() {
    const file = this.files[0];
    const fileUrl = URL.createObjectURL(file);

    // Set the background image of the div
    fileDisplayArea.style.backgroundImage = `url(${fileUrl})`;
     
    // Remove any existing child elements from the div
    fileDisplayArea.innerHTML = '';
    });
       
</script>
<script>

</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  
</body>
</html>