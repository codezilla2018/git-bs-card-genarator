<?php
/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 5/20/2018
 * Time: 9:26 PM
 */

require_once("BusinessCard.php");


/***
 * example 1
 */
$newCard = new BusinessCard();
//$newCard->clearMemory();
$newCard->template = 1;
$newCard->name = "Example User full name  ";
$newCard->url = "//http:www.google.com";
$newCard->email = "email@gmail.com";
$newCard->telePhone = 123456789;
$newCard->setAddress("address line1","address line2","address line3");
$newCard->create();

echo "<br><br>";


/***
 * example 1
 */
$newCard = new BusinessCard();
//$newCard->clearMemory();
$newCard->template = 2;
$newCard->name = "Example User full name  ";
$newCard->url = "//http:www.google.com";
$newCard->email = "email@gmail.com";
$newCard->telePhone = 123456789;
$newCard->setAddress("address line1","address line2","address line3");
$newCard->create();

echo "<br><br>";


/***
 * example 1
 */
$newCard = new BusinessCard();
//$newCard->clearMemory();
$newCard->template = 3;
$newCard->name = "Example User full name  ";
$newCard->url = "//http:www.google.com";
$newCard->email = "email@gmail.com";
$newCard->telePhone = 123456789;
$newCard->setAddress("address line1","address line2","address line3");
$newCard->create();

echo "<br><br>";


/***
 * example 1
 */
$newCard = new BusinessCard();
//$newCard->clearMemory();
$newCard->template = 4;
$newCard->name = "Example User full name  ";
$newCard->url = "//http:www.google.com";
$newCard->email = "email@gmail.com";
$newCard->telePhone = 123456789;
$newCard->setAddress("address line1","address line2","address line3");
$newCard->create();

echo "<br><br>";


/***
 * example 1
 */
$newCard = new BusinessCard();
//$newCard->clearMemory();
$newCard->template = 5;
$newCard->name = "Example User full name  ";
$newCard->url = "//http:www.google.com";
$newCard->email = "email@gmail.com";
$newCard->telePhone = 123456789;
$newCard->setAddress("address line1","address line2","address line3");
$newCard->create();

echo "<br><br>";
