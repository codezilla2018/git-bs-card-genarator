<?php

/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 5/22/2018
 * Time: 10:40 PM
 */
class Address
{

    public $addressLIne1 = "";
    public $addressLine2 = "";
    public $addressLIne3 = "";

    /***
     * @param $line1
     * @param $line2
     * @param $line3
     */
    public function set($line1,$line2,$line3)
    {
        $this->addressLIne1 = $line1;
        $this->addressLine2 = $line2;
        $this->addressLIne3 = $line3;
    }

    /***
     * @return array
     */
    public function get(){
        return [$this->addressLIne1,$this->addressLine2,$this->addressLIne3];
    }
}