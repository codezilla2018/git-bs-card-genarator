<?php
/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 5/20/2018
 * Time: 9:26 PM
 */

require_once("BusinessCard.php");

$newCard = new BusinessCard();
$newCard->name = "Lindhamulage Sasika De Silva";
$newCard->email = "sivasasika@gmail.com";
$newCard->mobile = 07777777326623;
$newCard->address = ["address line1","line2","line3"];
$newCard->create();
