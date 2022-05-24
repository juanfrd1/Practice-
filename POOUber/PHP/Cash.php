<?php 
    
    require_once('Payment.php');
    class Cash extends Payment {
        public function __constructor($id){
            parent::__constructor($id);
        }
    }



?>