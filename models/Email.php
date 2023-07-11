<?php
    class Email extends CommunicationSystem{
        // PROPRIETA
        public $attachment;
        private $deliveryNotification;
        public static $ledColor = "Yellow";

        // METODI
            // COSTRUTTORE
            function __construct(String $sender, String $receiver, String $title, String $content, Bool $deliveryNotification){
                parent::__construct($sender, $receiver, $title, $content);
                $this->deliveryNotification = $deliveryNotification;
            }

            // FUNZIONI
            public function getDeliveryNotification(){
                return $this->deliveryNotification;
            }

            // INOLTRO
            public function forward(){
                return "Inoltro effettuato";
            }

            // STAMPA
            public function print(){
                return "Stampa effettuata";
            }

            // POLIMORFISMO FUNCTION "SEND"
            public function send(){
                return "Email inviata";
            }

        // FINE METODI
    }
?>