<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lomakkeen tiedot
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Oma sähköposti
    $to = "jenniannala11@hotmail.com";
    $subject = "Uusi yhteydenotto verkkosivuilta";

    // Sähköpostin sisältö
    $emailContent = "Nimi: $name\n";
    $emailContent .= "Sähköposti: $email\n";
    $emailContent .= "Viesti:\n$message\n";

    // Otsakkeet
    $headers = "From: $email";

    // Lähetä sähköposti
    if (mail($to, $subject, $emailContent, $headers)) {
        echo "Viestisi on lähetetty onnistuneesti!";
    } else {
        echo "Viestin lähettäminen epäonnistui. Yritä myöhemmin uudelleen.";
    }
}
?>
