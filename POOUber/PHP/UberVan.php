<?php
require_once('car.php');
class UberVan extends Car {
    public $typeCarAccepted;
    public $seatsmaterial;

    public function __construct($license, $driver, $typeCarAccepted, $material){
        parent::__construct($license, $driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsmaterial = $seatsmaterial;
    }
   
    
}

?>