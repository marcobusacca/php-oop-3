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

        // FINE METODI
    }
?>