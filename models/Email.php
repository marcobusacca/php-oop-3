<?php
    class Email extends CommunicationSystem{
        // PROPRIETA
        public $attachment;
        private $deliveryNotification;
        public static $ledColor = "Yellow";

        // METODI
            // COSTRUTTORE
            function __construct(String $sender, String $receiver, String $title, String $content){
                parent::__construct($sender, $receiver, $title, $content);
                $this->deliveryNotification = true;
            }

        // FINE METODI
    }
?>