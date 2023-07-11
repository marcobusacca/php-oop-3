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


    // CREO LE ISTANZE DELLA SOTTO-CLASSE "PUSH-NOTIFICATIONS"
    $pushNotification_1 = new PushNotifications("Silvia", "Sofia", "Titolo Notifica Push", "Contenuto Notifica Push", true, "fab fa-whatsap");
    $pushNotification_2 = new PushNotifications("Alessia", "Piero", "Titolo Notifica Push", "Contenuto Notifica Push", false, "fab fa-twitter");
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Font Awesome CDN -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Head Title -->
        <title>php-oop-3</title>
    </head>
    <body>
    </body>
</html>