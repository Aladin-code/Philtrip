

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
        background-color: rgba(255, 255, 255, 0.8);
        border-radius: 15px;
        max-width: 480px; /* set a maximum width */
        width: 100%; /* make sure it takes up 100% of the available width */
        border: 1px solid #ccc;
}
.custom-btn{
        color:white;
        background:#FCD116;
    }
    *{
        font-family: 'Poppins', sans-serif;
      
    }
    #title{
        font-weight:800;
    }  
   .custom-btn{
        background:#032728;
   }
   #login{
        color:#9EAF27;

   }
   #acc{
    color:#02575B;
   }
 
    </style>
</head>
<body>
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup">
  Launch static backdrop modal
</button>


<div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="content">
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
            
            <p style="text-align:center" id="acc">Already have an account? <a href="index.php"  id="login">Login now</a></p>
            
        </form>
           
     </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

   
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>