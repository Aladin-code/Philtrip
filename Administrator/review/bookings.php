<head>
    <title>Administrator</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .content {
            margin-left: 280px;
            padding: 20px;
        }

        .space {
            margin-top: 7%;
        }

        .headdd {
            background-color: #026369;
            color: white;
            position: fixed;
            width: 100%;
            z-index: 999999;
            margin-left: 270px;
            padding: 20px;
            box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75);
        }

        .headdd h1 {
            width: 90%;
        }

        #archive_btn {
            padding: 10px;
            border: 2px solid tomato;
            border-radius: 10px;
            color: tomato;
            background: rgba(0,0,0,0);
            transition: ease-in-out .5s;
        }

        #archive_btn:hover {
            transition: ease-in-out .5s;
            background: tomato;
            color: white;
        }
    </style>
</head>

<body>
    <?php
        require "sidebar.php";
    ?>
    <div class="headdd">
        <h1> All Bookings</h1>
    </div>
    <section class="content">
        <div class="space"></div>
        <div class="container">
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
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require_once "connection.php";

                        class Bookings {
                            private $connection;

                            public function __construct($connection) {
                                $this->connection = $connection;
                            }

                            public function getBookings() {
                                $query = "SELECT bookings_tbl.booking_id, login_tbl.username, adventure_tbl.Name, adventure_tbl.Location, arrival, no_of_stay, Services, total_payable FROM bookings_tbl INNER JOIN login_tbl ON login_tbl.user_id = bookings_tbl.user_id INNER JOIN adventure_tbl ON Adventure_tbl.adventureID = bookings_tbl.AdventureID WHERE NOT bookings_tbl.Status = 'archived'";
                                $result = $this->connection->query($query);

                                if($result -> num_rows > 0) {
                                    $bookings = array();
                                    while ($row = $result -> fetch_assoc()) {
                                        $booking = array (
                                            'booking_id' => $row['booking_id'],
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
                                    return null;
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
                                echo "<td style='text-align: center'><form method='post'>";
                                echo '<input type="text" name="bookingID" value="'.$result['booking_id'].'" style="display: none">';
                                echo "<input type='submit' id='archive_btn' name='archive' value='Archive'>";
                                echo "</form></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<h3 style='text-align: center; margin-top: 30%; color: lightgray'>No bookings found.</h3>";
                            echo "<style>table {display: none;}</style>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

<?php
    require "connection.php";
    if(isset($_POST['archive'])) {
        $bookingID = $_POST['bookingID'];

        $sql = "UPDATE bookings_tbl SET Status = 'archived' WHERE booking_id = '$bookingID'";
        $update = $connection -> query($sql);

        if($update) {
            echo "<script type='text/javascript'> alert('Archived successfully!') </script>";
            echo "<script type='text/javascript'> location.href='bookings.php' </script>";
        }
    }
?>