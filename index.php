<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/pizza.css" type="text/css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">


    <title>Poppa's Pizza</title>
</head>
<body>
    <div class="container" id="main">

    <div class="jumbotron">
        <h1 class="display-4">Poppa's Pizza</h1>
        <p class="lead">Pizza is good.</p>
        <hr class="my-4">
        <p>blah blah blah blah</p>
    </div>

        <div id="pizzaImg" class="col">
            <img id="pizzaGuy" src="images/pizza_dude.jpg" alt="Picture of Pizza w/ Sunglasses" class="img float-right">
        </div>

<!--        action is where you want to go when the form is clicked && the method is how it's getting there-->
    <form id="pizza-form" action="confirmation.php" method="post">

        <fieldset class="form-group">
            <legend>Contact Info</legend>
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="">
                <span class="err" id="err-fname">
                    Please enter a first name
                </span>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="">
                <span class="err" id="err-lname">
                    Please enter a last name
                </span>
            </div>


        </fieldset>

        <fieldset class="form-group">
            <legend>Pickup or Delivery</legend>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method" id="pickup" value="pickup">
                <label class="form-check-label" for="pickup">
                    Pickup
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="method" id="delivery" value="delivery">
                <label class="form-check-label" for="delivery">
                    Delivery
                </label>
            </div>
            <span class="err" id="err-method">
                    Please select pick-up or delivery
            </span>

            <div class="form-group" id="address-block">
                <label for="address">Address</label>
                <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                <span class="err" id="err-address">
                    Please enter your address for delivery
            </span>
            </div>
        </fieldset>


        <fieldset class="form-group">
            <legend>Select Toppings</legend>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="pepperoni" id="pepperoni" name="toppings[]">
                <label class="form-check-label" for="pepperoni">
                    Pepperoni
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="pineapple" id="pineapple" name="toppings[]">
                <label class="form-check-label" for="pineapple">
                    Pineapple
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="spinach" id="spinach" name="toppings[]">
                <label class="form-check-label" for="spinach">
                    Spinach
                </label>
            </div>

            <span class="err" id="err-toppings">
                    You did not select any toppings dude
            </span>

        </fieldset>


        <fieldset class="form-group">
            <legend>Select a Size</legend>
            <div class="form-group">
                <select class="form-control" id="selectSize" name="selectSize">
                    <?php
                        // associative array so that we can fill the select
                        $sizes = array(
                                "none" => "Select a Size",
                                "small" => "Small (8\")",
                                "medium" => "Medium (12\")",
                                "large" => "Large (18\")",
                        );

                        foreach($sizes as $key => $value) {
                            echo "<option value='$key'>$value</option>";
                        }
                    ?>
                </select>
            </div>
            <span class="err" id="err-size">
                Please select a size.
            </span>
        </fieldset> <!-- end of fieldset that contains information for pizza size -->

        <button id="submit" type="submit" class="btn btn-primary">
            Submit your order
        </button>

    </form>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="scripts/pizza.js"></script>
<script>
    $("#delivery").on("click", function() {
        $("#address-block").css("display", "block");
    });

    $("#pickup").on("click", function() {
        $("#address-block").css("display", "none");
    });
</script>
</body>
</html>