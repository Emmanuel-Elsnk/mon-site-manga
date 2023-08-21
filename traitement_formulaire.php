<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "eoyandza0@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouveau message de contact de $name";
    $headers = "From: $email";

    // Envoie de l'e-mail
    mail($to, $subject, $message, $headers);
}
?>
