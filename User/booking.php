<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/smoothness/jquery-ui.css">
    <title>Booking</title>
    <style>
        .input-line{
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    margin-bottom: 2rem;
    width: 100%;
}
.form{
    width:700px;
}
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="container form">
            <h1>Boracay Sunset Cruise with Kayak, Paddle Board, and Mermaid Tail Experience</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati temporibus, totam debitis, aliquid eveniet sit eum aut facere, ea vero distinctio ad. Odio, aspernatur placeat fugiat, laborum aut ipsum atque neque saepe labore sapiente repellendus voluptatem minus dolorem cupiditate eaque, quae sed iste a. Quas dolor reiciendis saepe consequatur nisi.</p>
        <div class="d-flex align-items-center ">
        <div style="height:30px;border-radius:3px;width:5px;background:green"> </div>
        <h5 style="text-indent:7px">Tour Package</h5>
        </div>
           
        <div>
            <form action="">
                <p>Select Options</p>
                <div class="input-line">
                    <label for="tour-date">Tour Date</label>
                    <input type="date" id="date" name="date">
                </div>
               
                <div class="services">
                                                <h5>Services Offered</h5    >
                                                    <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" name="tour_guide" id="tour_guide" data-price="700" value="1">
                                                             <label>Tour Guide</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="accomodation" id="accomodation" data-price="1700" value="2">
                                                            <label>Accomodation</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="food_drinks" id="food_drink" data-price="500" value="3">
                                                            <label>Food & Drinks</label>
                                                        </div>
                                                     </div>
                                        
                                                     <div class="row">
                                                        <div class="col">
                                                            <input type="checkbox" name="equipment" id="equipment" value="4" data-price="200">
                                                            <label>Equipments</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="personal_vehicle" id="personal_vehicle" value="5" data-price="2200">
                                                            <label>Personal Vehicle</label>
                                                        </div>
                                                        <div class="col">
                                                            <input type="checkbox" name="toiletries" id="toiletries" value="6" data-price="300">
                                                            <label>Toiletries</label>
                                                        </div>
                                                     </div>
                                            </div>
                <div class="input-line">
                    <label for="quantity">Quantity</label>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" max="100" step="1">
                </div>

                <div class="input-line">
                    <label for="quantity">No of stay(Days)</label>
                    <input type="number" id="stay" name="stay" value="1" min="1" max="100" step="1">
                </div>
                
                <div class="d-flex justify-content-between align-items-center" style="width:100%;border:1px solid black">
                
                <div class="input-line">
                    <label for="total-price" >Total Price:</label>
                    <span id="total-price" data-value="200">0</span>
                    </div>
                    <button class="btn btn-primary">Book</button>
                </div>
                
            </form>
        </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        var price = 0;
        var initial = document.getElementById("total-price");
        //Function to update total price
        function updatePrice(){
            var quantity = $("#quantity").val();
            var stay = $("#stay").val();
            var initialPrice = initial.getAttribute("data-value");
            var pricePerDay = price + (quantity * initialPrice) ;
            var total = pricePerDay * stay;
            $("#total-price").text(total);
        }

        //Function to calculate total price
        function calculatePrice(){
            price = 0;
            $("input[type='checkbox']:checked").each(function(){
                var thisPrice = $(this).data("price");
                price += thisPrice;
            });
            updatePrice();
        }

        //Calculate price when a checkbox is checked or unchecked
        $("input[type='checkbox']").change(function(){
            calculatePrice();
        });

        //Calculate price when quantity is changed
        $("#quantity").change(function(){
            updatePrice();
        });

        $("#stay").change(function(){
            updatePrice();
        });

        //Calculate price on page load
        calculatePrice();
    });
</script>
</body>
</html>