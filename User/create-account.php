<?php
    include 'connection.php';

    if(isset($_POST['signup'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $temp = password_hash($password,PASSWORD_DEFAULT);
        $query = "INSERT INTO login_tbl (username,password,Name,email,address) VALUES ('$username','$password','$name','$email','$address')";
        $result = $connection->query($query);
        
        if($result){
                   echo '<script type="text/javascript">alert("Incorrect password or username. Try again")';
                    echo '<script>location.href="adventures.php"</script>';
        }
    }




?>