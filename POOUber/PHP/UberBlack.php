<?php
require_once('car.php');
class UberBlack extends Car {
    public $typeCarAccepted;
    public $seatsmaterial;

    public function __construct($license, $driver, $typeCarAccepted, $seatsmaterial){
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsmaterial = $seatsmaterial;
    }
   
    
}

?>