<?php 
    
    require_once('Payment.php');
    class Card extends Payment {
        public $email;

        public function __constructor($id, $email){
            parent::__constructor($id);
            $this->email = $email;
        }
    }



?>