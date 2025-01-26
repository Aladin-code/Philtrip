<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    .content{
        margin-left:280px;
        padding:20px;
    }

    /* .contents {
        margin-left:280px;
        width: 80%;
    } */

    .page {
        width: 60%;
        padding: 20px;
        margin: auto;
        display: flex;
        justify-content: space-between;
    }

    #booking_btn, #adventure_btn, #blog_btn, #inquiry_btn {
        padding: 15px;
        border: 2px solid #026369;
        border-radius: 10px;
        color: #026369;
        background: rgba(0,0,0,0);
        transition: ease-in-out .5s;
    }

    #booking_btn:hover, #adventure_btn:hover, #blog_btn:hover, #inquiry_btn:hover {
        background: #026369;
        color: white;
        transition: ease-in-out .5s;
    }
    
    .img {
        max-width:100%;
    }

    table div{
        width:200px;
    }

    #booking_btn.active {
        background: #026369;
        color: white;
        transition: ease-in-out .5s;
    }

    #adventure_btn.active {
        background: #026369;
        color: white;
        transition: ease-in-out .5s;
    }

    #blog_btn.active {
        background: #026369;
        color: white;
        transition: ease-in-out .5s;
    }

    #inquiry_btn.active {
        background: #026369;
        color: white;
        transition: ease-in-out .5s;
    }

    table, thead, th, tr, td {
        text-align: center;
    }
</style>

<body>
    <?php
        require "sidebar.php";
    ?>

    <section class="content">
        <div class="cont">
            <h1 style="box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75); height: 70px;">Archives</h1>
        </div>
        <div class="page">
            <button type="button" onclick="location.href='archive.php?page=bookings'" id="booking_btn">Bookings</button>
            <button type="button" onclick="location.href='archive.php?page=adventures'" id="adventure_btn">Adventures</button>
            <button type="button" onclick="location.href='archive.php?page=blogs'" id="blog_btn">Blogs and Reviews</button>
            <button type="button" onclick="location.href='archive.php?page=inquiries'" id="inquiry_btn">Inquiries</button>
        </div>
        <?php
            if(isset($_GET['page'])) {
                $page = $_GET['page'];

                if($page == 'bookings') {
                    echo '<div class="contents">
                    <div class="head" style="padding-top: 10px; padding-bottom: 10px; box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75);">
                        <h4>Archived Booking</h4>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Location</th>
                                <th scope="col">Departure</th>
                                <th scope="col">No. of stay</th>
                                <th scope="col">Services</th>
                                <th scope="col">Payables</th>
                            </tr>
                        </thead>
                        <tbody>';
                                require_once "connection.php";

                                class Bookings {
                                    private $connection;

                                    public function __construct($connection) {
                                        $this->connection = $connection;
                                    }

                                    public function getBookings() {
                                        $query = "SELECT login_tbl.username, adventure_tbl.Name, adventure_tbl.Location, arrival, no_of_stay, Services, total_payable FROM bookings_tbl INNER JOIN login_tbl ON login_tbl.user_id = bookings_tbl.user_id INNER JOIN adventure_tbl ON Adventure_tbl.adventureID = bookings_tbl.AdventureID WHERE bookings_tbl.Status = 'archived'";
                                        $result = $this->connection->query($query);

                                        if($result -> num_rows > 0) {
                                            $bookings = array();
                                            while ($row = $result -> fetch_assoc()) {
                                                $booking = array (
                                                    'username' => $row['username'],
                                                    'name' => $row['Name'],
                                                    'location' => $row['Location'],
                                                    'arrival' => $row['arrival'],
                                                    'no_of_stay' => $row['no_of_stay'],
                                                    'services' => $row['Services'],
                                                    'total_payable' => $row['total_payable']
                                                );
                                                $bookings[] = $booking;
                                            }
                                            return $bookings;
                                        } else {
                                            echo "<h3 style='text-align: center; margin-top: 20%; color: lightgray'>No archived booking found.</h3>";
                                            echo "<style>table {display: none;}</style>";
                                        }
                                    }
                                }

                                $bookings = new Bookings($connection);
                                $results = $bookings -> getBookings();

                                if(!empty($results)) {
                                    foreach($results as $result) {
                                        echo "<tr>";
                                        echo "<td>".$result['username']."</td>";
                                        echo "<td>".$result['name']."</td>";
                                        echo "<td>".$result['location']."</td>";
                                        echo "<td>".$result['arrival']."</td>";
                                        echo "<td>".$result['no_of_stay']."</td>";
                                        echo "<td>".$result['services']."</td>";
                                        echo "<td>₱".$result['total_payable']."</td>";
                                        echo "</tr>";
                                    }
                                }
                        echo '</tbody>
                    </table>
                </div>';
                }

                if($page == 'adventures') {
                    echo '<div class="contents">
                        <div class="head" style="padding-top: 10px; padding-bottom: 10px; box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75);">
                            <h4>Archived Adventures</h4>
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
                            <tbody>';
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
                                            $sql = "SELECT * FROM adventure_tbl WHERE Status = 'archive'";
                                            $result = $this->connection->query($sql);
                                    
                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $adventure = new Adventure($row['AdventureID'], $row['Name'], $row['Location'], $row['Description'], $row['Price'], $row['Discount'], $row['Image']);
                                                    array_push($adventures, $adventure);
                                                }
                                            } else {
                                                echo "<h3 style='text-align: center; margin-top: 20%; color: lightgray'>No archived adventures found.</h3>";
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
                                        echo '<td><form method="post">';
                                        echo '<input type="text" name="adventureID" value="'.$adventure -> getId().'" style="display: none">';
                                        echo '<input type="submit" class="btn btn-success" name="restore" value="Restore">';
                                        echo '</form></td>';
                                        echo "</tr>";
                                    }
                            echo '</tbody>
                        </table>
                    </div>';

                    if(isset($_POST['restore'])) {
                        $advID = $_POST['adventureID'];

                        $query = "UPDATE adventure_tbl SET Status = 'unarchive' WHERE AdventureID = '$advID'";
                        $restore = $connection -> query($query);

                        if($restore) {
                            echo "<script type='text/javascript'> alert('Restored successfully!') </script>";
                            echo "<script type='text/javascript'> location.href='archive.php?page=adventures' </script>";
                        }else {
                            echo "<script type='text/javascript'> alert('Failed to insert services!') </script>";
                        }
                    }
                }
                
                if($page == 'blogs') {
                    echo '<div class="contents">
                        <div class="head" style="padding-top: 10px; padding-bottom: 10px; box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75);">
                            <h4>Archived Blogs & Reviews</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr style="text-align: center">
                                    <th scope="col">Status</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Review</th>
                                </tr>
                            </thead>
                            <tbody>';
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "philtrip";
                                    $conn = new mysqli($servername,$username,$password,$database);

                                    $query = "SELECT * FROM review_tbl WHERE Progress = 'Declined'";
                                    $result = $conn -> query($query);

                                    if($result -> num_rows > 0) {
                                        while($row = $result -> fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td style='color: tomato'>Archived</td>";
                                            echo "<td>".$row['Username']."</td>";
                                            echo "<td>".$row['Review']."</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<h3 style='text-align: center; margin-top: 20%; color: lightgray'>No archived reviews found.</h3>";
                                        echo "<style>table {display: none;}</style>";
                                    }
                            echo '</tbody>
                        </table>
                    </div>';
                }
                
                if($page == 'inquiries') {
                    echo '<div class="contents">
                        <div class="head" style="padding-top: 10px; padding-bottom: 10px; box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75);">
                            <h4>Archived Inquiries</h4>
                        </div>
                        <table class="table">
                            <thead>
                                <tr style="text-align: center">
                                    <th scope="col">Status</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Concerns & Inquiries</th>
                                </tr>
                            </thead>
                            <tbody>';
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $database = "philtrip";
                                    $conn = new mysqli($servername,$username,$password,$database);

                                    $query = "SELECT * FROM contact_tbl WHERE Status2 = 'archived'";
                                    $result = $conn -> query($query);

                                    if($result -> num_rows > 0) {
                                        while($row = $result -> fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td style='color: yellowgreen'>".$row['Status2']."</td>";
                                            echo "<td>".$row['username']."</td>";
                                            echo "<td>".$row['email']."</td>";
                                            echo "<td>".$row['message']."</td>";
                                            echo "</tr>";
                                        }
                                    } else {
                                        echo "<h3 style='text-align: center; margin-top: 20%; color: lightgray'>No archived inquiries found.</h3>";
                                        echo "<style>table {display: none;}</style>";
                                    }
                            echo '</tbody>
                        </table>
                    </div>';
                }
            } else {
                echo "<h3 style='text-align: center; margin-top: 20%; color: lightgray'>Your archives should be here.</h3>";
            }
        ?>
    </section>
    <script>
        var url = window.location.href;
        var pageName = url.substring(url.lastIndexOf("/") + 1);

        switch (pageName) {
            case "archive.php?page=bookings":
                document.getElementById("booking_btn").classList.add("active");
                break;
            case "archive.php?page=adventures":
                document.getElementById("adventure_btn").classList.add("active");
                break;
            case "archive.php?page=blogs":
                document.getElementById("blog_btn").classList.add("active");
                break;
            case "archive.php?page=inquiries":
                document.getElementById("inquiry_btn").classList.add("active");
                break;
        }
    </script>
</body>