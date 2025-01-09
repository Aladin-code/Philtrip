
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            include 'connection.php';
            $sql1 = "SELECT * FROM adventure_tbl ";
            $result = $connection->query($sql1);
           
            if($result->num_rows > 0  ){
                $count = 0;
                while($row = $result->fetch_assoc()){
                    $Image=$row['Image'];
                    $Name=$row['Name'];
                    $Location = $row['Location'];
                    $Description = $row['Description'];
                    $Price = $row['Price'];
                    echo '<div class="col-md-3 d-flex justify-content-center" id="zoom">
                            <div class="card border" style="width: 20rem; height: 100%">
                                <img src="src/'.$Image.'" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 style="font-weight: bold">'.$Name.'</h2>
                                    <p>'.$Description.'</p>
                                    <h3 style="font-weight: bold">₱'.$Price.'</h3>
                                    <a href="#" class="btn btn-primary">Book Now</a>
                                </div>
                            </div>
                        </div>';
                  
            }
        }
            ?>
        </div>
    </div>
</body>
</html>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
