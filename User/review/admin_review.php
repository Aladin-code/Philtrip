<head>
    <title>PhilTrip PH</title>
    <!-- Tab Icon -->
    <link rel="icon" href="src/LOGO.png" type="image/icon type">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }

    .content{
        margin-left:290px;
        padding:20px;
    }

    #accept {
        padding: 15px;
        border: 2px solid yellowgreen;
        border-radius: 10px;
        background: white;
        margin-top: 5px;
        margin-bottom: 5px;
        color: yellowgreen;
        transition: ease-in-out .5s;
    }

    #accept:hover {
        background: yellowgreen;
        color: white;
        transition: ease-in-out .5s;
    }

    #reject {
        padding: 15px;
        border: 2px solid tomato;
        border-radius: 10px;
        background: white;
        margin-top: 5px;
        margin-bottom: 5px;
        color: tomato;
        transition: ease-in-out .5s;
    }

    #reject:hover {
        background: tomato;
        color: white;
        transition: ease-in-out .5s;
    }
</style>

<body>
    <section class="content">
        <div class="cont">
            <h1 style="box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75); height: 70px;">Blogs and Reviews</h1>
            <table class="table">
                <thead>
                    <tr style="text-align: center">
                        <th scope="col">Status</th>
                        <th scope="col">Username</th>
                        <th scope="col">Review</th>
                        <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        require "connection.php";

                        $query = "SELECT * FROM review_tbl";
                        $result = $connection -> query($query);

                        if($result -> num_rows > 0) {
                            while($row = $result -> fetch_assoc()) {
                                echo "<tr>";
                                echo "<td style='color: yellowgreen'>".$row['Progress']."</td>";
                                echo "<td>".$row['Username']."</td>";
                                echo "<td>".$row['Review']."</td>";
                                echo "<td style='text-align: center'><form action='' method='post'>";
                                echo "<input type='text' style='display: none' name='reviewID' value='".$row['ReviewID']."'>";
                                echo "<input type='submit' name='accept' id='accept' value='Accept'>";
                                echo "<input type='submit' name='reject' id='reject' value='Reject'>";
                                echo "</form></td>";
                                echo "</tr>";
                            }
                        }

                        if(isset($_POST['accept'])) {
                            $reviewID = $_POST['reviewID'];
                            
                            $query2 = "UPDATE review_tbl SET Status='approved', Progress='Approved' WHERE ReviewID = '$reviewID'";
                            $result2 = $connection -> query($query2);

                            if($result2) {
                                echo "<script type='text/javascript'> alert('Accepted successfully!') </script>";
                                echo "<script type='text/javascript'> location.href='admin_review.php' </script>";
                            }
                        }

                        if(isset($_POST['reject'])) {
                            $reviewID = $_POST['reviewID'];

                            $query4 = "DELETE FROM review_tbl WHERE ReviewID = '$reviewID'";
                            $result4 = $connection -> query($query4);

                            if($result4) {
                                echo "<script type='text/javascript'> alert('Deleted successfully!') </script>";
                                echo "<script type='text/javascript'> location.href='admin_review.php' </script>";
                            }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>