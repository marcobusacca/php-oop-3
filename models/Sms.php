<?php
    class Sms extends CommunicationSystem{
        // PROPRIETA
        private $readNotification;
        private $replyApproval;
        public static $ledColor = "Green";

        // METODI
            // COSTRUTTORE
            function __construct(String $sender, String $receiver, String $title, String $content, Bool $readNotification, Bool $replyApproval){
                parent::__construct($sender, $receiver, $title, $content);
                $this->readNotification = $readNotification;
                $this->replyApproval = $replyApproval;
            }

            // FUNZIONI
            public function getReadNotification(){
                return $this->readNotification;
            }

            public function getReplyApproval(){
                return $this->replyApproval;
            }

            // RISPOSTA
            public function reply(){
                return "Risposta inviata";
            }

            // POLIMORFISMO FUNCTION "SEND"
            public function send(){
                return "Sms inviato";
            }

        // FINE METODI
    }
?>