<?php
abstract class House {
    abstract function getHouseName();
    function getHouseMotto(){}
    function getHouseSeat(){}
    function introduce () {
        print ("House " . $this->getHouseName()
            . " of " . $this->getHouseSeat()
            . " : " . $this->getHouseMotto() . PHP_EOL);
    }
}
?>