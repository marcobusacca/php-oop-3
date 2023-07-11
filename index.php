<?php
    // IMPORTO TUTTE LE CLASSI DA MODELS
    require_once __DIR__."/models/CommunicationSystem.php";
    require_once __DIR__."/models/Email.php";
    require_once __DIR__."/models/Attachment.php";
    require_once __DIR__."/models/Sms.php";
    require_once __DIR__."/models/PushNotifications.php";

    // CREO LE ISTANZE DELLA SOTTO-CLASSE "EMAIL"
    $email_1 = new Email("Marco", "Luca", "Oggetto Email", "Contenuto Email", true);
    $email_2 = new Email("Luigi", "Marco", "Oggetto Email", "Contenuto Email", false);

    // INSERISCO ALLEGATO ALL'ISTANZA "EMAIL-1"
    $email_1->attachment = new Attachment("video-lezione", "mp4", 50);


    // CREO LE ISTANZE DELLA SOTTO-CLASSE "SMS"
    $sms_1 = new Sms("Gianfranco", "Raffaele", "Titolo Sms", "Contenuto Sms", true, true);
    $sms_2 = new Sms("Cesare", "Giulia", "Titolo Sms", "Contenuto Sms", false, false);

    var_dump($sms_1);
    var_dump($sms_2);
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Head Title -->
        <title>php-oop-3</title>
    </head>
    <body>
    </body>
</html>