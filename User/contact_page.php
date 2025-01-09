<?php
    require "head.php";
?>

<style>
    * {
        font-family: 'Poppins', sans-serif;
    }

    .space {
        margin-top: 11%;
    }

    body {
        background-image: url('src/img/banaue2.jpg');
        background-size: cover;
        overflow: hidden;
    }

    .content {
        padding: 20px;
        border-radius: 10px;
        width: 75%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        background: white;
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.2);
    }

    .content hr {
        width: 75%
    }

    .calling_card .row {
        justify-content: center;
        text-align: center;
        margin-top: 10px;
        margin-bottom: 10px
    }

    .calling_card img {
        width: 60px;
    }

    .form {
        width: 80%;
        margin-left: auto;
        margin-right: auto;
    }

    #email, #username, #message {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
        border-radius: 10px;
        background: #E8F0FE;
        border: none;
    }

    .form textarea {
        resize: none;
        height: 150px;
    }

    #send {
        padding: 10px;
        border: none;
        border-radius: 10px;
        background: #264228;
        color: white;
    }
</style>

<body>
<?php include"navbar.php"?>;
    <div class="space"></div>
    <div class="content">
        <div class="row">
            <div class="col col-4">
                <div class="calling_card">
                    <div class="row">
                        <img src="src/locator.png">
                        <h4>Address</h4>
                        <p>Central Luzon State University <br> Science City of Muñoz, Nueva Ecija</p>
                        <hr>
                    </div>
                    <div class="row">
                        <img src="src/call.png">
                        <h4>Phone</h4>
                        <p>+63 912 3456 789<br>+63 987-6543-210</p>
                        <hr>
                    </div>
                    <div class="row">
                        <img src="src/email.png">
                        <h4>Email</h4>
                        <p>PhilTrip.Philippines@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3>Send us a message...</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim consequatur nobis et iure optio temporibus unde facilis vitae ad excepturi.</p>
                <hr style="width: 90%; margin-left: auto; margin-right: auto;">
                <div class="form">
                    <form action="contact_process.php" method="post">
                        <div class="input">
                            <input type="text" name="email" id="email" placeholder="Email address here..." value="" required>
                        </div>
                        <div class="input">
                            <input type="text" name="username" id="username" placeholder="Username here..." value="" required>
                        </div>
                        <div class="message">
                            <textarea name="message" id="message" placeholder="Your message here..." required></textarea>
                        </div>
                        <input type="submit" name="send" id="send" value="Send Now">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>