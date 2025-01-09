<?php
    class Review {
        private $connection;

        public function __construct($connection) {
            $this->connection = $connection;
        }

        public function addReview($profile, $email, $username, $review) {
            $status = 'pending';

            $query = "INSERT INTO review_tbl(Email,Profile,Username,Review,Status) VALUES (?, ?, ?, ?, ?)";
            $stmt = $this->connection->prepare($query);
            $stmt->bind_param("sssss", $email, $profile, $username, $review, $status);
            $result = $stmt->execute();

            if ($result) {
                echo "<script type='text/javascript'> alert('Submitted successfully!') </script>";
                echo "<script type='text/javascript'> location.href='user_review.php' </script>";
            }
        }
    }

    require "connection2.php";
    $review = new Review($connection);

    if(isset($_POST['submit'])) {
        $profile = $_POST['profile'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $review_text = $_POST['comment'];

        $review->addReview($profile, $email, $username, $review_text);
    }
?>


<!-- Yung $status, papalitan ng 'approved' sa admin side. gagamitan ng Update syntax para ma-override yung status and magview sya sa user side. sana nagets mo pre hahahahahaha -->

<!-- in-add ko lang yung profile, disregard mo yun kung ayaw mo, saka yung sa star, static lang yon, walang javascript. -->