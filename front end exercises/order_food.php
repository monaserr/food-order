<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $food = htmlspecialchars($_POST['food']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $notes = htmlspecialchars($_POST['notes']);

    $to = "monaserrrrrr@gmail.com"; // استبدل هذا ببريدك
    $subject = "New Food Order from $name";
    $body = "Order Details:\n\n" .
            "Name: $name\n" .
            "Phone: $phone\n" .
            "Food Item: $food\n" .
            "Quantity: $quantity\n" .
            "Notes: $notes\n";
    $headers = "From: orders@yourwebsite.com"; // يمكنك تغييره لبريدك الخاص

    if (mail($to, $subject, $body, $headers)) {
        echo "Order placed successfully!";
    } else {
        echo "Failed to place order. Please try again.";
    }
}
?>
