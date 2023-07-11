<?php
    class PushNotifications extends CommunicationSystem{
        // PROPRIETA
        private $visible;
        private $icon;
        public static $ledColor = "White";

        // METODI
            // COSTRUTTORE
            function __construct(String $sender, String $receiver, String $title, String $content, Bool $visible, String $icon){
                parent::__construct($sender, $receiver, $title, $content);
                $this->visible = $visible;
                $this->icon = $icon;
            }

        // FINE METODI
    }
?>