<?php
    class Contact {
        private $connection;

        public function __construct($connection) {
            $this->connection = $connection;
        }

        public function sendMessage($email, $username, $message) {
            $query = "INSERT INTO contact_tbl (email, username, message, Status, Status2) VALUES (?, ?, ?, 'Pending', 'Unarchive')";
            $stmt = $this->connection->prepare($query);
            $stmt->bind_param("sss", $email, $username, $message);
            $result = $stmt->execute();

            if ($result) {
                echo "<script type='text/javascript'> alert('Send successfully!') </script>";
                echo "<script type='text/javascript'> location.href='contact_page.php' </script>";
            }
        }
    }

    require "connection.php";
    $contact = new Contact($connection);

    if(isset($_POST['send'])) {
        $email = $_POST['email'];
        $username = $_POST['username'];
        $message = $_POST['message'];

        $contact->sendMessage($email, $username, $message);
    }
?>