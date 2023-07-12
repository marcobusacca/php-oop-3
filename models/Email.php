<?php
    class Email extends CommunicationSystem{
        // TRAITS
        use Date;

        // PROPRIETA
        public $attachment;
        private Bool $deliveryNotification;
        public static String $ledColor = "Yellow";
        private String $date;

        // METODI
            // COSTRUTTORE
            function __construct(String $sender, String $receiver, String $title, String $content, Bool $deliveryNotification, String $date){
                parent::__construct($sender, $receiver, $title, $content);
                $this->deliveryNotification = $deliveryNotification;
                $this->date = $date;
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