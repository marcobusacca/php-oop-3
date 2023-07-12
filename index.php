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
    $pushNotification_1 = new PushNotifications("Silvia", "Sofia", "Titolo Notifica Push", "Contenuto Notifica Push", true, "fas fa-comment");
    $pushNotification_2 = new PushNotifications("Alessia", "Piero", "Titolo Notifica Push", "Contenuto Notifica Push", false, "fab fa-twitter");

    // ARRAY CONTENENTE TUTTE LE ISTANZE DI OGNI SOTTO-CLASSE DELLA CLASSE GENITORE "COMMUNICATION-SYSTEM"
    $CommunicationSystem = [
        $email_1,
        $email_2,
        $sms_1,
        $sms_2,
        $pushNotification_1,
        $pushNotification_2
    ]
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
        <!-- Main -->
        <main>
            <!-- Main Container -->
            <div class="container my-5">
                <!-- Main Row -->
                <div class="row">
                    <!-- Title Col -->
                    <div class="col-12 text-center my-3">
                        <!-- Title -->
                        <h1>Communication System</h1>
                    </div>
                    <!-- Content Col -->
                    <?php foreach($CommunicationSystem as $item): ?>
                        <div class="col-12 my-3">
                            <div class="card">
                                <div class="card-header">
                                    <h2>
                                        <?php echo get_class($item)?>
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <!-- Sender -->
                                    <div class="my-2">
                                        <strong>Mittente:</strong>
                                        <span>
                                            <?php echo $item->getSender() ?>
                                        </span>
                                    </div>
                                    <!-- Receiver -->
                                    <div class="my-2">
                                        <strong>Destinatario:</strong>
                                        <span>
                                            <?php echo $item->getReceiver() ?>
                                        </span>
                                    </div>
                                    <!-- Title -->
                                    <hr>
                                    <div class="my-2">
                                        <strong>Titolo:</strong>
                                        <span>
                                            <?php echo $item->getTitle() ?>
                                        </span>
                                    </div>
                                    <!-- Content -->
                                    <div class="my-2">
                                        <strong>Contenuto:</strong>
                                        <span>
                                            <?php echo $item->getContent() ?>
                                        </span>
                                    </div>
                                    <hr>
                                    <!-- Ringtone -->
                                    <div class="my-2">
                                        <strong>Suoneria:</strong>
                                        <span>
                                            <?php echo $item::$ringtone ?>
                                        </span>
                                    </div>
                                    <!-- Send -->
                                    <hr>
                                    <div class="my-2">
                                        <span>
                                            <?php echo $item->send() ?>
                                        </span>
                                    </div>
                                    <hr>
                                    <?php if(get_class($item) === "Email"){ ?>
                                        <!-- Attachment -->
                                        <?php if($item->attachment){ ?>
                                            <div class="my-2">
                                                <strong>Allegato:</strong>
                                                <ul>
                                                    <li>
                                                        <span>Nome Allegato:</span>
                                                        <span>
                                                            <?php echo $item?->attachment->name ?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>Tipologia Allegato:</span>
                                                        <span>
                                                            <?php echo $item?->attachment->type ?>
                                                        </span>
                                                    </li>
                                                    <li>
                                                        <span>Dimensione Allegato:</span>
                                                        <span>
                                                            <?php echo $item?->attachment->size." MB " ?>
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <hr>
                                        <?php } ?>
                                        <!-- Delivery Notification -->
                                        <div class="my-2">
                                            <strong>Email Consegnata:</strong>
                                            <span>
                                                <?php echo ($item->getDeliveryNotification()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <hr>
                                        <!-- Forward -->
                                        <div class="my-2">
                                            <span>
                                                <?php echo $item->forward() ?>
                                            </span>
                                        </div>
                                        <!-- Print -->
                                        <div class="my-2">
                                            <span>
                                                <?php echo $item->print() ?>
                                            </span>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                    <?php if(get_class($item) === "Sms"){ ?>
                                        <!-- Read Notification -->
                                        <div class="my-2">
                                            <strong>Sms visualizzato:</strong>
                                            <span>
                                                <?php echo ($item->getReadNotification()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <!-- Reply Approval -->
                                        <div class="my-2">
                                            <strong>Risposta Consentita:</strong>
                                            <span>
                                                <?php echo ($item->getReplyApproval()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <?php if($item->getReplyApproval()){ ?>
                                            <!-- Reply -->
                                            <div class="my-2">
                                                <span>
                                                    <?php echo $item->reply(); ?>
                                                </span>
                                            </div>
                                        <?php } ?>
                                        <hr>
                                    <?php } ?>
                                    <?php if(get_class($item) === "PushNotifications"){ ?>
                                        <!-- Visible -->
                                        <div class="my-2">
                                            <strong>Notifica visibile:</strong>
                                            <span>
                                                <?php echo ($item->getVisible()) ? 'si' : 'no' ?>
                                            </span>
                                        </div>
                                        <!-- Icon -->
                                        <div class="my-2">
                                            <strong>Icona notifica:</strong>
                                            <i class="<?php echo $item->getIcon() ?>"></i>
                                        </div>
                                        <hr>
                                        <!-- Click -->
                                        <div class="my-2">
                                            <span>
                                                <?php echo $item->click() ?>
                                            </span>
                                        </div>
                                        <hr>
                                    <?php } ?>
                                    <!-- Led Color -->
                                    <div class="my-2">
                                        <strong>Colore Led:</strong>
                                        <span>
                                            <?php switch($item::$ledColor){
                                                case 'Yellow':
                                                    echo 'Giallo';
                                                break;
                                                case 'Green':
                                                    echo 'Verde';
                                                break;
                                                case 'White':
                                                    echo 'Bianco';
                                                break;
                                            } ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </main>
        <!-- Fine Main -->
    </body>
</html>