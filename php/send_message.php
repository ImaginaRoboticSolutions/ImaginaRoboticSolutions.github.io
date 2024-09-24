<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Enviar correo
    $to = "imaginaroboticsolutions@gmail.com";
    $headers = "From: " . $email;

    mail($to, $subject, $message, $headers);

    echo "Mensaje enviado correctamente";
}
