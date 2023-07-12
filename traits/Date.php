<?php
    trait Date {
        // FUNZIONI
        public function timeDiff() {

            $diff = round((time() - strtotime($this->date)) / 60);
    
            return $diff . ' min fa';
        }
    }
?>