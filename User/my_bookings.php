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
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    body {
        background: #F5F5F5;
    }

    .containerr {
        width: 90%;
        margin: auto;
    }

    .containerr .headd {
        margin-top: 7%;
        text-align: center;
        padding-bottom: 10px;
        margin-bottom: 20px;
        box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75);
    }

    .containerr #img {
        background-size: cover;
        border: none;
        border-radius: 10px;
    }

    .containerr #dest {
        font-weight: bold;
        font-size: 32px;
        margin-bottom: -1px;
    }

    .containerr #loc, #dept, #stay {
        margin-bottom: -1px;
        font-size: 20px;
    }

    .containerr #price {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: -1px;
        text-align: end;
        color: #FF5B00;
    }

    .containerr #finish {
        padding: 10px;
        border: 2px solid #FF5B00;
        color: #FF5B00;
        border-radius: 10px;
        margin-bottom: 15px;
        margin-right: 25px;
        background: white;
        transition: ease-in-out .5s;
    }

    .containerr #finish:hover {
        background: #FF5B00;
        color: white;
        transition: ease-in-out .5s;
    }

    .containerr img {
        width: 180px;
        height: 180px;
        border: none;
        border-radius: 10px;
    }
</style>

<body>

    <div class="containerr">
  
        <div class="contentt">
        <?php include "navbar.php"?>;
            <div class="headd">
                <h1>MY BOOKINGS</h1>
            </div>
            <div class="row">
                <!-- start ng php -->
                <?php
                    class BookingSystem {
                        private $connection;

                        public function __construct($servername, $username, $password, $database) {
                            $this->connection = new mysqli($servername, $username, $password, $database);
                        }

                        public function getPendingBookings() {
                            $query = "SELECT * FROM bookings_tbl 
                                    INNER JOIN login_tbl ON bookings_tbl.user_id = login_tbl.user_id 
                                    INNER JOIN adventure_tbl ON bookings_tbl.AdventureID = adventure_tbl.AdventureID 
                                    WHERE bookings_tbl.Progress = 'Booked' AND bookings_tbl.Current_Status = 'Pending'";
                            $result = $this->connection->query($query);

                            $bookings = array();

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $bookingID = $row['booking_id'];
                                    $img = $row['Image'];
                                    $destination = $row['Name'];
                                    $location = $row['Location'];
                                    $departure = $row['arrival'];
                                    $stay = $row['no_of_stay'];
                                    $bill = $row['total_payable'];

                                    $booking = array(
                                        'bookingID' => $bookingID,
                                        'img' => $img,
                                        'destination' => $destination,
                                        'location' => $location,
                                        'departure' => $departure,
                                        'stay' => $stay,
                                        'bill' => $bill
                                    );

                                    array_push($bookings, $booking);
                                }
                            } else {
                                echo "<h1 style='text-align: center; margin-top: 18%; color: lightgray'>No records found.</h1>";
                            }

                            return $bookings;
                        }

                        public function finishTransaction($bookingID) {
                            // Implementation of finishTransaction method goes here.
                        }
                    }

                    $bookingSystem = new BookingSystem("localhost", "root", "", "philtrip_db");

                    $bookings = $bookingSystem->getPendingBookings();

                    foreach ($bookings as $booking) {
                        $bookingID = $booking['bookingID'];
                        $img = $booking['img'];
                        $destination = $booking['destination'];
                        $location = $booking['location'];
                        $departure = $booking['departure'];
                        $stay = $booking['stay'];
                        $bill = $booking['bill'];

                        // <!-- Package Details -->
                        echo '<div class="contt" style="width: 90%; margin:auto; border-radius: 10px">
                        <div class="row" style="margin-bottom: 20px">
                            <div class="col" style="background: white; border-radius: 10px">
                                <div class="row p-3" style="width: 100%; margin:auto">
                                    <div class="col col-3" id="img">
                                        <img src="destinations/'.$img.'" alt="">
                                    </div>
                                    <div class="col" style="margin-left: -70px;">
                                        <p id="dest">'.$destination.'</p>
                                        <p id="loc">Location: <span style="font-weight: bold">'.$location.'</span></p>
                                        <p id="dept">Date of Departure: <span style="font-weight: bold">'.$departure.'</span></p>
                                        <p id="stay">Duration: <span style="font-weight: bold">'.$stay.'</span> day/s trip</p>
                                        <p id="price">₱'.$bill.'</p>
                                    </div>
                                </div>
                                <hr style="width: 90%; margin: auto; margin-bottom: 15px;">
                                <div class="row" style="text-align: right">
                                    <form action="" method="post">
                                        <input type="text" name="bookingID" style="display: none" value="'.$bookingID.'">
                                        <input type="submit" id="finish" name="finish" value="Finish Transaction">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                <!-- end ng php -->
            </div>
        </div>
    </div>
</body>

<?php
    require "connection.php";

    class Booking {
        private $connection;

        public function __construct($connection) {
            $this->connection = $connection;
        }

        public function finishTransaction($bookingID) {
            $query = "UPDATE bookings_tbl SET Current_Status = 'Finished' WHERE booking_id = '$bookingID'";
            $result = $this->connection->query($query);

            if($result) {
                echo "<script type='text/javascript'> alert('Thank you for choosing PhilTrip!') </script>";
                echo "<script type='text/javascript'> location.href='my_bookings.php' </script>";
            }
        }
    }

    if(isset($_POST['finish'])) {
        $bookingID = $_POST['bookingID'];
        $booking = new Booking($connection);
        $booking->finishTransaction($bookingID);
    }
?>
