<?php
    class CommunicationSystem{
        // PROPRIETA
        private $sender;
        private $receiver;
        private $title;
        private $content;
        public static $ringtone = "DRIIIN";

        // METODI
            // COSTRUTTORE
            function __construct($sender, $receiver, $title, $content){
                $this->sender = $sender;
                $this->receiver = $receiver;
                $this->title = $title;
                $this->content = $content;
            }

        // FINE METODI
    }
?>