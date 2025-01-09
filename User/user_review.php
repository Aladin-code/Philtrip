<!DOCTYPE html>
<html lang="en">
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
    <style>
        body {
            background-image: url('src/1.jpg');
            background-size: cover;
        }

        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }

        .cont {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
            margin-top: 100px;
            margin-bottom: 20px;
            padding: 20px;
            background: white;
            box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }

        .head {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        #review_btn {
            background: rgba('0,0,0,0');
            border: 2px solid #032728;
            border-radius: 10px;
            color: #032728;
            padding: 15px;
            transition: ease-in-out .5s;
        }

        #review_btn:hover {
            background: #032728;
            color: white;
            transition: ease-in-out .5s;
        }

        #email, #username {
            width: 100%;
            /* height: 40px; */
            padding: 15px;
            margin-bottom: 5px;
            border: none;
            border-radius: 10px;
            background: #E8F0FE;
        }

        #comment {
            resize: none;
            width: 95%;
            height: 300px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 0;
            border: none;
            border-radius: 10px;
            background: #E8F0FE;
            padding: 15px;
        }

        #submit {
            padding: 15px;
            border: 2px solid yellowgreen;
            border-radius: 10px;
            color: yellowgreen;
            transition: ease-in-out .5s;
            background: white;
        }

        #cancel {
            padding: 15px;
            border: 2px solid tomato;
            border-radius: 10px;
            color: tomato;
            transition: ease-in-out .5s;
            background: white;
        }

        #submit:hover {
            background: yellowgreen;
            color: white;
            transition: ease-in-out .5s;
        }

        #cancel:hover {
            background: tomato;
            color: white;
            transition: ease-in-out .5s;
        }

        .rating {
            font-size: 24px;
            color: #ccc;
        }

        .star {
            display: inline-block;
            margin-right: 5px;
            color: #ffcc00;
            cursor: pointer;
        }
        .footer-menu {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            margin-top: 50px;
            font-size: 30px;
            letter-spacing: 1px;
        }
        .footer-menu span {
            font-weight: bold;
            color:  #026369;
            text-transform: uppercase;
        }
        .footer-copy {
            font-size: 14px;
            margin-top: 20px;
        }
        .footer-copy span {
            color: #026369;
        }
        .footer-copy a {
            color:  #026369;
            text-decoration: none;
        }
        .footer-copy a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <?php include "navbar.php" ?>
    <div class="cont">
        <div class="head">
            <h2 style="font-weight: bold;"><span style="color: #032728">PHIL</span><span style="color: #A0B027">TRIP</span></h2>
            <!-- Button trigger modal -->
            <button type="button" class="btn" id="review_btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Write a review
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Leave a Review</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="review_process.php" method="post">
                            <div class="modal-body">
                                <div class="row" style="margin-bottom: 10px;">
                                    <label>Choose your avatar:</label>
                                    <input type="file" name="profile" id="profile" style="margin-left: 30px">
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label>Email</label>
                                        <input type="text" name="email" id="email" value="">
                                    </div>
                                    <div class="col">
                                        <label>Username</label>
                                        <input type="text" name="username" id="username" value="">
                                    </div>
                                </div>
                                <div class="row">
                                    <p>Comment:</p>
                                    <textarea name="comment" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="cancel" data-bs-dismiss="modal">Cancel</button>
                                <input type="submit" name="submit" id="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Comments -->

        <div class="content">
            <div class="row justify-content-center" style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 20px;">
                <!-- Start the loop -->
                <?php
                    require "connection2.php";

                    $query = "SELECT * FROM review_tbl WHERE Status='approved' ORDER BY ReviewID DESC";
                    $result = $connection -> query($query);

                    while($row = $result -> fetch_assoc()) {
                        $review = $row['Review'];
                        $username = $row['Username'];
                        $profile = $row['Profile'];

                        echo "<div class='col'>";
                        echo "<div class=card border' style='width: 15rem; margin-top: 10px; margin-bottom: 10px;'>";
                        echo "<div class='card-body'>";
                        //Profile here
                        echo "<div style='width: 100%; text-align: center; margin-bottom: 10px; display: flex; align-items: center'>";
                        echo "<img src='src/profile/".$profile."' style='width: 40px; height:40px; text-align: center'>";
                        echo "<label style='margin-left: 10px; font-weight: bold'>".$username."</label>";
                        echo "</div>";
                        // conctanate the comment here
                        // echo "<h5 style='font-weight: bold'>".$username."</h5>";
                        //star rating
                        echo "<div class='rating'>";
                        echo "<span class='star'>&#9733;</span>";
                        echo "<span class='star'>&#9733;</span>";
                        echo "<span class='star'>&#9733;</span>";
                        echo "<span class='star'>&#9733;</span>";
                        echo "<span class='star'>&#9733;</span>";
                        echo "</div>";

                        echo "<hr>";
                        echo "<p class='card-text'>".$review."</p>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                ?>
                <!-- End the loop -->
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-menu">
            <span>Explore.</span> <span>Dream.</span> <span>Discover.</span>
        </div>

        <div class="footer-copy" style="text-align: center">
            <p>&copy; 2023 PhilTrip.com. All rights reserved. </p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>
</body>
</html>