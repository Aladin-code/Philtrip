<?php
    require "connection2.php";

    if(isset($_POST['send'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $message = $_POST['message'];

        $query = "INSERT INTO contact_tbl (email, username, message, Status, Status2) VALUES ('$email','$username','$message','Pending','Unarchive')";
        $result = $connection -> query($query);

        if($result) {
            echo "<script type='text/javascript'> alert('Send successfully!') </script>";
            echo "<script type='text/javascript'> location.href='contact_page.php' </script>";
        }
    }
?>