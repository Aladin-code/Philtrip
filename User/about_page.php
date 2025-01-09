<?php
    require "head.php";
?>

<style>
    .space {
        margin-top: 5%;
        background: blue;
    }

    .cont {
        width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .head {
        background-image: url('src/img/banaue.jpg');
        background-size: cover;
        text-align: center;
        width: 100%;
        height: 500px;
        padding-top: 190px;
        margin-bottom: 20px;
    }

    .head h1 {
        color: white;
        text-shadow: 2px 2px 4px #000000;
        font-size: 120px;
    }

    .picture1 {
        background-image: url('src/img/banaue2.jpg');
        background-size: cover;
    }

    .content {
        width: 90%;
        margin-left: auto;
        margin-right: auto;
    }

    .paragraph p {
        text-indent: 50px;
    }

    #fb, #ig, #tw, #tg {
        color: gray;
        transition: ease-in-out .5s;
        border-radius: 5px;
    }

    #fb:hover {
        color: #4267B2;
        transition: ease-in-out .5s;
        transform: translateY(-5px);
    }

    #ig:hover {
        color: #8E3FAD;
        transition: ease-in-out .5s;
        transform: translateY(-5px);
    }

    #tw:hover {
        color: #4267B2;
        transition: ease-in-out .5s;
        transform: translateY(-5px);
    }

    #tg:hover {
        color: #0088CC;
        transition: ease-in-out .5s;
        transform: translateY(-5px);
    }

    .partnership {
        margin-top: 20px;
        width: 100%;
        margin-left: auto;
        background: #F5F5F5;
        margin-right: auto;
    }

    .picture2 {
        background-image: url('src/img/fly.png');
        background-size: cover;
    }

    .part_head {
        text-align: center;
    }

    #pg {
        color: gray;
        transition: ease-in-out .5s;
        cursor: default;
        font-size: 14px;
    }

    #pg:hover {
        color: green;
        transition: ease-in-out .5s;
        transform: translateY(-5px);
    }

    footer p {
        font-family: 'Poppins', sans-serif;
        transition: ease-in-out .5s;
        padding: 5px;
    }
</style>

<body>
<?php include"navbar.php"?>;
    <div class="space"></div>
    <div class="cont">
        <div class="head">
            <h1>ABOUT US</h1>
        </div>
        <div class="content">
            <div class="row paragraph">
                <div class="col col-2 picture1">
                </div>
                <div class="col" style="margin-left: 20px">
                    <h1 style="text-align: justify">What is PhilTrip?</h1>
                    <p style="text-align: justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque dicta fuga nulla quas minima consectetur nesciunt atque totam optio distinctio nobis voluptatibus est ad quos et magnam qui velit, unde quisquam consequuntur assumenda nihil fugit libero. Autem illo repellat incidunt animi rem magni, sit minima officia cupiditate ad quidem pariatur aspernatur</p>
                    <p style="text-align: justify">itaque voluptatem quod cumque amet architecto, molestiae corrupti possimus minus excepturi? Sequi voluptas repellat facilis saepe id atque odio quo velit laborum rerum excepturi odit vel explicabo, nulla natus tenetur sint cumque corrupti eos, architecto necessitatibus, quis commodi quod quibusdam! Voluptatibus quod rerum, modi ad ipsum vel beatae excepturi.</p>
                </div>
                <div class="col" style="margin-left: 20px">
                    <div class="spacee" style="height: 55px"></div>
                    <p style="text-align: justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque dicta fuga nulla quas minima consectetur nesciunt atque totam optio distinctio nobis voluptatibus est ad quos et magnam qui velit, unde quisquam consequuntur assumenda nihil fugit libero. Autem illo repellat incidunt animi rem magni, sit minima officia cupiditate ad quidem pariatur aspernatur itaque voluptatem quod cumque amet architecto, molestiae corrupti possimus minus excepturi? Sequi voluptas repellat facilis saepe id atque odio quo velit laborum rerum excepturi odit vel explicabo, nulla natus tenetur sint cumque corrupti eos, architecto necessitatibus, quis commodi quod quibusdam! Voluptatibus quod rerum, modi ad ipsum vel beatae excepturi.</p>
                </div>
            </div>
        </div>
        <div class="partnership" style="">
            <div class="part_head">
                <div class="row" style="width: 98.4%">
                    <div class="col" style="padding-top: 120px; padding-bottom: 120px;">
                        <h1 style="margin-bottom: 20px; ">What we do?</h1>
                        <p>Whether it's something new in your neighborhood or an adventure abroad, with PhilTrip <br> you're always connected to a world of things to do and places to see.</p>
                    </div>
                    <div class="col col-3 picture2"></div>
                </div>
            </div>
        </div>
        <!-- Group Members -->
        <div class="content">
            <div class="prop" style="text-align: center; margin-top: 20px;">
                <h1>Meet the gang behind PhilTrip</h1>
            </div>
            <div class="proponents d-flex justify-content-center" style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 20px;">
                <div class="card" style="width: 20rem; margin-left: 30px; margin-right: 30px;">
                    <div class="card-img-top" style="height: 500px; background-image: url('src/img/allen1.jpg'); background-size: cover"></div>
                    <div class="card-body">
                        <p style="font-weight: bold; font-size: 20px;">Richard Allen Gabor</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row" style="justify-content: center; width: 85%; margin-left: auto; margin-right: auto">
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 4px" id="fb"><i class='bx bxl-facebook' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="ig"><i class='bx bxl-instagram-alt' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="tw"><i class='bx bxl-twitter' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 5px" id="tg"><i class='bx bxl-telegram' style="font-size: 25px"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin-left: 30px; margin-right: 30px;">
                    <div class="card-img-top" style="height: 500px; background-image: url('src/img/aladen.jpg'); background-size: cover"></div>
                    <div class="card-body">
                        <p style="font-weight: bold; font-size: 20px;">Aladin Cacho</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row" style="justify-content: center; width: 85%; margin-left: auto; margin-right: auto">
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 4px" id="fb"><i class='bx bxl-facebook' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="ig"><i class='bx bxl-instagram-alt' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="tw"><i class='bx bxl-twitter' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 5px" id="tg"><i class='bx bxl-telegram' style="font-size: 25px"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin-left: 30px; margin-right: 30px;">
                    <div class="card-img-top" style="height: 500px; background-image: url('src/img/alo.jpg'); background-size: cover"></div>
                    <div class="card-body">
                        <p style="font-weight: bold; font-size: 20px;">Justin Joy Alo</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row" style="justify-content: center; width: 85%; margin-left: auto; margin-right: auto">
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 4px" id="fb"><i class='bx bxl-facebook' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="ig"><i class='bx bxl-instagram-alt' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="tw"><i class='bx bxl-twitter' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 5px" id="tg"><i class='bx bxl-telegram' style="font-size: 25px"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="proponents d-flex justify-content-center" style="width: 90%; margin-left: auto; margin-right: auto; margin-top: 20px;">
                <div class="card" style="width: 20rem; margin-left: 30px; margin-right: 30px;">
                    <div class="card-img-top" style="height: 500px; background-image: url('src/img/jasle.jpg'); background-size: cover"></div>
                    <div class="card-body">
                        <p style="font-weight: bold; font-size: 20px;">Jashlie Mae Ramones</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row" style="justify-content: center; width: 85%; margin-left: auto; margin-right: auto">
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 4px" id="fb"><i class='bx bxl-facebook' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="ig"><i class='bx bxl-instagram-alt' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="tw"><i class='bx bxl-twitter' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 5px" id="tg"><i class='bx bxl-telegram' style="font-size: 25px"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin-left: 30px; margin-right: 30px;">
                    <div class="card-img-top" style="height: 500px; background-image: url('src/img/pola.jpg'); background-size: cover"></div>
                    <div class="card-body">
                        <p style="font-weight: bold; font-size: 20px;">Paola Ysabel Linsangan</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row" style="justify-content: center; width: 85%; margin-left: auto; margin-right: auto">
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 4px" id="fb"><i class='bx bxl-facebook' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="ig"><i class='bx bxl-instagram-alt' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="tw"><i class='bx bxl-twitter' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 5px" id="tg"><i class='bx bxl-telegram' style="font-size: 25px"></i></div>
                        </div>
                    </div>
                </div>
                <div class="card" style="width: 20rem; margin-left: 30px; margin-right: 30px;">
                    <div class="card-img-top" style="height: 500px; background-image: url('src/img/rusan.png'); background-size: cover"></div>
                    <div class="card-body">
                        <p style="font-weight: bold; font-size: 20px;">Roseanne Joy Dela Cruz</p>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <div class="row" style="justify-content: center; width: 85%; margin-left: auto; margin-right: auto">
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 4px" id="fb"><i class='bx bxl-facebook' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="ig"><i class='bx bxl-instagram-alt' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: px" id="tw"><i class='bx bxl-twitter' style="font-size: 25px"></i></div>
                            <div class="col d-flex justify-content-center" style="padding: 10px; margin-left: 5px; margin-right: 5px" id="tg"><i class='bx bxl-telegram' style="font-size: 25px"></i></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Starts -->
        <footer style="margin-top: 30px; box-shadow: 3px 0px 10px rgba(0, 0, 0, 0.2);">
            <div class="row p-3 d-flex justify-content-center" style="width:90%; margin-left: auto; margin-right: auto">
                <div class="col px-5">
                    <img src="src/img/logogo.png" style="width: 100%">
                    <p style="color: gray">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius aspernatur architecto distinctio fugit ex. Quidem natus incidunt voluptas ea. Magni quidem nulla animi illo, eveniet reprehenderit, nostrum saepe iusto ducimus temporibus, quam eum quis nobis. Laborum dicta deleniti rerum iste!</p>
                </div>
                <div class="col">
                    <p style="font-weight: bold; font-size: 16px">About PhilTrip</p>
                    <p id="pg">What is PhilTrip?</p>
                    <p id="pg">What we do?</p>
                    <p id="pg">The Gang</p>
                </div>
                <div class="col">
                    <p style="font-weight: bold; font-size: 16px">Terms of Use</p>
                    <p id="pg">Terms and Conditions</p>
                    <p id="pg">Privacy Policy</p>
                    <p id="pg">Coockie Policy</p>
                    <p id="pg">Bug Bounty Program</p>
                </div>
                <div class="col">
                    <p style="font-weight: bold; font-size: 16px">Partnerships</p>
                    <p id="pg">Merchant Sign Up</p>
                    <p id="pg">Merchant Log In</p>
                    <p id="pg">Affiliate Program</p>
                    <p id="pg">Influencer Program</p>
                    <p id="pg">Agent Marketplace</p>
                    <p id="pg">Digital Solutions</p>
                    <p id="pg">Philtrip Partner Hub</p>
                    <p id="pg">Marketing Inquiries</p>
                </div>
                <div class="row" style="text-align: center">
                    <p style="font-size: 16px">2023 PhilTrip. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <!-- Footer Ends -->
    </div>
</body>