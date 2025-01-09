<?php 
// session_start();
 include 'connection.php';
    if(isset($_POST['submit'])){
        
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $query = "SELECT * from login_tbl WHERE username = '$username' AND password = '$password'";
        $result = $connection->query($query);
        
        if($result -> num_rows == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            echo "<script type='text/javascript'> alert('Logged in successfully!') </script>";
            echo "<script> location.href='index.php' </script>";
        } else {
            echo "<script type='text/javascript'> alert('Logged failed!') </script>";
            echo "<script> location.href='index.php' </script>";
        }
    }

?>

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
    .line{
        height:0.7px;
        background:#ccc;
    }
   *{
        font-family: 'Poppins', sans-serif;
        margin: 0;
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
    .loginFailed{
        background:#ccc;
        max-height:40px;
        display:flex;
        align-items:center;
        justify-content:center;
        padding-top:10px;
        border-radius:5px;
        margin-bottom:5px;
        color:red;
    }
       
    

    </style>
</head>


<body>
    

<div class="modal " id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
    
      <div class="modal-body">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> 
                            <div class="text-center mb-3">
                                <h1 id="title"><span style="color:#02575B">PHIL</span><span style="color:#8C954B">TRIP</span></h1>
                            </div>

                           

                            <form action="" method="post">
                                <input type="text" name="username" class="form-control form-control-lg mb-2 form-control text-center custom-input" placeholder="USERNAME">
                                <input type="password" name="password" class="form-control form-control-lg mb-3 form-control text-center custom-input" placeholder="PASSWORD">
                                <div class="text-center">
                                        <input type="submit" name = "submit" class="btn btn-login" style="width:180px" value="Login">
                                </div>

                        <div class="row mb-3"></div>
                            </form>
                            <p style="text-align:center" id="acc">Don't have an account yet?? <a href="signup.php" id="login" data-bs-toggle="modal" data-bs-target="#signup" data-bs-dismiss="modal">Signup now</a></p>
                        
                            <a href="" id="forgot-pass">Forgot password?</a>
    
   
      </div>
      
    </div>
  </div>
</div>
<div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      
      <div class="modal-body">
      <div class="content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="text-center mb-3">
            <h1 id="title"><span style="color:#02575B">PHIL</span><span style="color:#8C954B">TRIP</span></h1>
            </div>
        
        <form action="create-account.php" method="post">
            <div class="form-group">
                    <input type="text" class="form-control mb-2 form-control text-center" name="name" placeholder="Enter your name" required>
            </div>
                
            <div class="form-group">
                    <input type="text" class="form-control mb-2 form-control text-center" name="email" placeholder="Enter your email" required>
            </div>

            <div class="form-group">
                    <input type="text" class="form-control mb-2 form-control text-center" name="age" placeholder="Enter your age" required>
            </div>

            <div class="form-group">
                    <input type="text" class="form-control mb-2 form-control text-center"  name="address" placeholder="Enter your address" required>
            </div>
            
            <div class="form-group">
                    <input type="text" class="form-control mb-2 form-control text-center" name="username" placeholder="Create username" required>
            </div>
            <div class="form-group">
                    <input type="password" class="form-control mb-2 form-control text-center" name="password" placeholder="Create password" required>
            </div>

            <div class="text-center">
                <input type="submit" class="btn custom-btn mt-1 mb-2 " style="width:180px" name="signup"><br>
            </div>
            
            
            
        </form>
           
     </div>
    
      </div>
      
    </div>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        function redirectToSignUp() {
            alert("Signed up successfully");
            window.location.href = "adventures.php";
        }
    </script>

</body>
</html>