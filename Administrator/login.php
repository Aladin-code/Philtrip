<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
       html, body{
        height: 100%;
        min-height: 100%;
    }

    body{
     background-image: url("img/backgroundd.jpg"); 
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        overflow:hidden;
    }
    .container{
        width:100%;
        height:100vh;
        display:flex;
        justify-content:center;
        align-items:center;

    }
    .content{

    padding: 20px 30px 20px 30px;
    background-color: rgba(255, 255, 255, 0.75);
    border-radius: 15px;
    max-width: 480px; /* set a maximum width */
    width: 100%; /* make sure it takes up 100% of the available width */
    border: 1px solid #ccc;
}
    
    .line{
        height:0.7px;
        background:#ccc;
    }
   *{
        font-family: 'Poppins', sans-serif;
      
    }
    #title{
        font-weight:800;
    }
    #forgot-pass{
        font-size:14px;
        float:right;
        color:#9EAF27;
    }
    .custom-btn{
        color:white;
        background:#03272B;
    }
    .custom-input{
        font-size:16px;
        
    }
    .btn-login{
        background:#02575B;
        color: white;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="text-center mb-3">
            <h1 id="title"><span style="color:#02575B">PHIL</span><span style="color:#8C954B">TRIP</span></h1>
            </div>
           
            <form action="" method="post">
                <input type="text" name="username" class="form-control form-control-lg mb-2 form-control text-center custom-input" placeholder="USERNAME">
                <input type="password" name="password" class="form-control form-control-lg mb-3 form-control text-center custom-input" placeholder="PASSWORD">
                <div class="text-center">
                    <input type="submit" name="login" class="btn btn-login" style="width:180px" value="LOGIN">
                     <!-- <button type="button" class="btn btn-login" style="width:180px">LOGIN</button> -->
                </div>
             
                <div class="row mb-3"></div>
            </form>
            <!-- <p style="text-align:center" id="acc">Doesn't have an account yet?? <a href="signup.php" id="login">Signup now</a></p> -->
           
            <!-- <a href="" id="forgot-pass">Forgot password?</a> -->
</div>
    
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script>
        function redirectToSignUp() {
            window.location.href = "signup.php";
        }
    </script>
</body>
</html>

<?php
    require "connection.php";

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        // echo $password;

        $query = "SELECT * FROM admin_tbl WHERE Username = '$username'";
        $result = $connection -> query($query);

        if($result -> num_rows == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            echo "<script type='text/javascript'> alert('Logged in successfully!') </script>";
            echo "<script> location.href='index.php' </script>";
        } else {
            echo "<script type='text/javascript'> alert('Logged failed!') </script>";
            echo "<script> location.href='login.php' </script>";
        }

        // while($row = $result -> fetch_assoc()) {
        //     if($username == $row['Username'] && $password = $row['Password']){
        //         $_SESSION['username'] = $username;
        //         $_SESSION['password'] = $password;

        //         break;
        //     }
        // }
        // if(isset($_SESSION['username']) && ($_SESSION['password'])) {
        //     echo "<script type='text/javascript'> alert('".$password."') </script>";
        //     echo "<script> location.href='index.php' </script>";
        // }
        // else {
        //     echo "<script type='text/javascript'> alert('Logged in failed!') </script>";
        //     echo "<script> location.href='login.php' </script>";
        // }

        // if($result) {
            // echo "<script type='text/javascript'> alert('Logged in successfully!') </script>";
            // echo "<script> location.href='index.php' </script>";
        // }
    }
?>