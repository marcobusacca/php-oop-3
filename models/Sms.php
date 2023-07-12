<?php
    class Sms extends CommunicationSystem{
        // TRAITS
        use Date;

        // PROPRIETA
        private $readNotification;
        private $replyApproval;
        public static $ledColor = "Green";
        private String $date;

        // METODI
            // COSTRUTTORE
            function __construct(String $sender, String $receiver, String $title, String $content, Bool $readNotification, Bool $replyApproval, String $date){
                parent::__construct($sender, $receiver, $title, $content);
                $this->readNotification = $readNotification;
                $this->replyApproval = $replyApproval;
                $this->date = $date;
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