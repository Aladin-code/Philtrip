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
</style>

<body>
    <section class="content">
        <div class="cont">
        <h1 style="box-shadow: 0px 5px 5px -5px rgba(0,0,0,0.75); height: 70px;">Customer Inquiries</h1>
        <table class="table">
            <thead>
                <tr style="text-align: center">
                    <th scope="col">Status</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">Concerns & Inquiries</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require "connection.php";

                    $query = "SELECT * FROM contact_tbl WHERE Status2 = 'Unarchive' AND Status = 'Pending' ORDER BY InquiryID DESC";
                    $result = $connection -> query($query);

                    if($result -> num_rows > 0) {
                        while($row = $result -> fetch_assoc()) {
                            if($row['Status'] == 'Pending') {
                                $style = 'style="color: tomato"';
                            }
                            if($row['Status'] == 'Replied') {
                                $style = 'style="color: tomato"';
                            }
                            echo "<tr>";
                            echo "<td ".$style.">".$row['Status']."</td>";
                            echo "<td>".$row['username']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['message']."</td>";
                            echo "<td style='text-align: center'><form method='post'>";
                            echo "<input type=text' name='inquiryID' style='display: none' value='".$row['InquiryID']."'>";
                            echo "<input type='submit' class='btn btn-success' name='reply' id='reply' value='Reply'>";
                            // echo "<input type='submit' name='archive' id='archive' value='Archive'>";
                            echo "</form></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<h3 style='text-align: center; margin-top: 30%; color: lightgray'>No inquiries at the moment.</h3>";
                        echo "<style>table {display: none;}</style>";
                    }

                    if(isset($_POST['reply'])) {
                        $inquiryID = $_POST['inquiryID'];

                        $query = "UPDATE contact_tbl SET Status = 'Replied', Status2 = 'Archived' WHERE InquiryID = '$inquiryID'";
                        $result = $connection -> query($query);

                        if($result) {
                            echo "<script type='text/javascript'> alert('Replied successfully!') </script>";
                            echo "<script type='text/javascript'> location.href='inquiries.php'</script>";
                        }
                    }
                ?>
            </tbody>
        </table>
        </div>
    </section>
</body>