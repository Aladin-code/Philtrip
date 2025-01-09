<?php
    session_start();
    include 'connection.php';

    class Booking {
    private $userID;
    private $adventureID;
    private $arrival;
    private $no_of_stay;
    private $services;
    private $total_payable;
    private $progress;
    private $current_status;

    function __construct($userID, $adventureID, $arrival, $no_of_stay, $services, $total_payable, $progress, $current_status) {
        $this->userID = $userID;
        $this->adventureID = $adventureID;
        $this->arrival = $arrival;
        $this->no_of_stay = $no_of_stay;
        $this->services = $services;
        $this->total_payable = $total_payable;
        $this->progress = $progress;
        $this->current_status = $current_status;
    }

    function addBooking() {
        $connection = new mysqli("localhost", "root", "", "philtripp");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = "INSERT INTO bookings_tbl(user_id,AdventureID,arrival,no_of_stay,Services,total_payable,Progress,Current_Status) 
                    VALUES('$this->userID', '$this->adventureID', '$this->arrival', '$this->no_of_stay', '$this->services', '$this->total_payable', '$this->progress', '$this->current_status')";
        
        if ($connection->query($query) === TRUE) {
            echo "<script>alert('Added successfully');</script>";
            echo "<script type='text/javascript'>location.href='adventures.php'</script>";
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }

        $connection->close();
    }
    }

    class Adventure {
    private $name;
    private $price;
    private $discount;

    function __construct($name, $price, $discount) {
        $this->name = $name;
        $this->price = $price;
        $this->discount = $discount;
    }

    function getPricePerDay($quantity, $serviceFee) {
        return ($quantity * $this->price) + $serviceFee;
    }

    function getAdventureID() {
        $connection = new mysqli("localhost", "root", "", "philtripp");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = "SELECT * from adventure_tbl where Name = '$this->name'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $adventureID = $row['AdventureID'];
            }
        }

        $connection->close();
        return $adventureID;
    }

    function getDiscount() {
        return $this->discount;
    }
    }

    class User {
    private $username;

    function __construct($username) {
        $this->username = $username;
    }

    function getUserID() {
        $connection = new mysqli("localhost", "root", "", "philtripp");
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $query = "SELECT * from login_tbl where username = '$this->username'";
        $result = $connection->query($query);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $userID = $row['user_id'];
            }
        }

        $connection->close();
        return $userID;
    }
    }

    if (isset($_SESSION['username'])) {
        if (isset($_POST['book'])) {
            $name = $_SESSION['username'];
            $destination = $_POST['destination'];
            $price = $_POST['totals'];
            $quantity = $_POST['quantity'];
            $location = "Diyaan lang";
            $arrival = $_POST['date'];
            $stay = $_POST['stay'];
            $services = "";
            $serviceFee = 0;

            if (isset($_POST['tour_guide'])) {
                $serviceFee += $_POST['tour_guide'];
                $services = "Tour Guide";
            }
            if (isset($_POST['accomodation'])) {
                $serviceFee += $_POST['accomodation'];
                $services .= ", Accommodation";
            }
            if (isset($_POST['food_drinks'])) {
                $serviceFee += $_POST['food_drinks'];
                $services .= ", Food & Drinks";
            }
            if (isset($_POST['equipment'])) {
                $serviceFee += $_POST['equipment'];
                $services .= ", Equipment";
            }
            if (isset($_POST['personal_vehicle'])) {
                $serviceFee += $_POST['personal_vehicle'];
                $services .= ", Personal Vehicle";
            }
            if (isset($_POST['toiletries'])) {
                $serviceFee += $_POST['toiletries'];
                $services .= ", Toiletries";
            }

            $user = new User($name);
            $userID = $user->getUserID();

            $adventure = new Adventure($destination, $price, $discount);
            $adventureID = $adventure->getAdventureID();
            $discount = $adventure->getDiscount();

            $pricePerDay = $adventure->getPricePerDay($quantity, $serviceFee);
            $total = $pricePerDay * $stay;
            
            $booking = new Booking($userID, $adventureID, $arrival, $stay, $services, $total, "Booked", "Pending");
            $booking->addBooking();
        }
    } else {
        echo "<script>alert('You do not have an account yet');</script>";
        echo "<script type='text/javascript'>location.href='adventures.php'</script>";
    }
?>

<?php
    // session_start();
    // include 'connection.php';

    // if(isset($_SESSION['username'])){
    //     if(isset($_POST['book'])){
    //         $name = $_SESSION['username'];
    //         $destination = $_POST['destination'];
    //         $price = $_POST['totals'];
    //         $quantity= $_POST['quantity'];
    //         $location = "Diyaan lang";
    //         $arrival = $_POST['date'];
    //         $stay = $_POST['stay'];
    //         $services = "";
    //     $serviceFee = 0;
        
    //     if(isset($_POST['tour_guide'])){
    //         $serviceFee += $_POST['tour_guide'];
    //         $services = "Tour Guide";
    //     }
    //     if(isset($_POST['accomodation'])){
    //         $serviceFee += $_POST['accomodation'];
    //         $services .= ", Accommodation";
    //     }
    //     if(isset($_POST['food_drinks'])){
    //         $serviceFee += $_POST['food_drinks'];
    //         $services .= ", Food & Drinks";
    //     }
    //     if(isset($_POST['equipment'])){
    //         $serviceFee += $_POST['equipment'];
    //         $services .= ", Equipment";
    //     }
    //     if(isset($_POST['personal_vehicle'])){
    //         $serviceFee += $_POST['personal_vehicle'];
    //         $services .= ", Personal Vehicle";
    //     }
    //     if(isset($_POST['toiletries'])){
    //         $serviceFee += $_POST['toiletries'];
    //         $services .= ", Toiletries";
    //     }
        
    //         $query1 = "SELECT * from login_tbl where username = '$name'";
    //         $result1 = $connection->query($query1);
    //         $query2 = "SELECT * from adventure_tbl where Name = '$destination'";
    //         $result2 = $connection->query($query2);
        
    //         if($result1->num_rows > 0 ){
    //             while($row=$result1->fetch_assoc()){
    //                 $userID = $row['user_id'];
    //             }
    //         }
    //         if($result2->num_rows > 0 ){
    //             while($row=$result2->fetch_assoc()){
    //                 $adventureID = $row['AdventureID'];
    //                 $discount = $row['Discount'];
    //             }
            
    //         }
    //         $pricePerDay = ($quantity * $price) + $serviceFee;
    //         $total = $pricePerDay * $stay;
    //         echo $total;
        
            
    //         $query3 = "INSERT INTO bookings_tbl(user_id,AdventureID,arrival,no_of_stay,Services,total_payable,Progress,Current_Status) VALUES('$userID','$adventureID','$arrival','$stay', '$services','$total','Booked','Pending')";
    //         $result3 = $connection->query($query3);
        
    //         if($result3){
    //         echo "<script>alert('Added successfully');</script>";
    //         echo "<script type='text/javascript'>location.href='adventures.php' </script>";
    //         }
    //     }
    // }else{
    //     echo "<script>alert('You do not have account yet');</script>";
    //     echo "<script type='text/javascript'>location.href='adventures.php' </script>";
    // }
?>
