<?php
    class Attachment{
        // PROPRIETA
        public $name;
        public $type;
        public $size;

        // METODI
            // COSTRUTTORE
            function __construct(String $name, String $type, Int $size){
                $this->name = $name;
                $this->type = $type;
                $this->size = $size;
            }
        // FINE METODI
    }
?>