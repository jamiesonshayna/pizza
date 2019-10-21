<?php
    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $method = $_POST['method'];
    $address = $_POST['address'];
    $size = $_POST['selectSize'];

    // try to get the topings
    $toppings = $_POST['toppings'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poppa's Pizza</title>
</head>
<body>
    <h1>Thank you for your order!</h1>
    <h2>Order Summary</h2>
    <h3>Customer Information</h3>
    <p>Name: <?php print "$first $last"; ?></p>
    <p>You selected: <?php print $method; ?></p>
    <p>Customer Address Info: <?php print $address; ?></p>
    <h3>Pizza Information</h3>
    <p>Size: <?php print $size; ?></p>
    <p>Toppings: <?php print "$toppings[0], $toppings[1]"; ?></p>
    <pre>


    </pre>

    <?php
    // sending an email to myself the data
    $email = "jamieson.shayna@gmail.com";

    $email_body = "Order Summary --\r\n";
    $email_body .= "Name: $first $last\r\n";
    $email_body .= "Delivery Method: $method\r\n";

    $email_subject = "New Order Placed";
    $to = $email;

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email \r\n";

    $success = mail($to, $email_subject, $email_body, $headers);

    $msg = $success ? "Your order has been successfully placed." : "We're sorry. There was a problem with your order.";

    // print final confirmation here
    echo "<p>$msg</p>";
    ?>
</body>
</html>