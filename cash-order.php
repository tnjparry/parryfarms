<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item = htmlspecialchars($_POST["item"]);
    $price = htmlspecialchars($_POST["price"]);
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);

    $to = "parryfarmsllc@yahoo.com";
    $subject = "Cash at Pickup Order: $item";
    $message = "Order for: $item ($$price)\nName: $name\nEmail: $email\nPhone: $phone";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "<h2>Thank you! Your order has been sent. We will contact you soon.</h2>";
} else {
    echo "Invalid request.";
}
?>