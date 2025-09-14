<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = htmlspecialchars($_POST["item_name"]);
    $amount = htmlspecialchars($_POST["amount"]);

    // Save the order details to a file or database
    $order = "Product: $item_name, Price: $amount\n";
    file_put_contents("local-pickup-orders.txt", $order, FILE_APPEND);

    // Display a confirmation message
    echo "<h1>Thank you for your order!</h1>";
    echo "<p>You have selected local pickup for: $item_name ($$amount).</p>";
    echo "<p>We will contact you soon to arrange pickup details.</p>";
}
?>