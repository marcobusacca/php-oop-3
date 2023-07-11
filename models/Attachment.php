<?php
    class Attachment{
        // PROPRIETA
        public $name;
        public $type;
        public $size;

        // METODI
            // COSTRUTTORE
            function __construct($name, $type, $size){
                $this->name = $name;
                $this->type = $type;
                $this->size = $size;
            }

        // FINE METODI
    }
?>