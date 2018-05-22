<?php

/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 5/20/2018
 * Time: 10:56 PM
 */
require_once ("Address.php");
class QrcodeTemplate
{

    public $url = "";
    public $name = "";
    public $email = "";
    public $telephone = "";
    public $address = "";

    /***
     * @param $url
     */
    public function setUrl($url)
    {
        $this->url = $url;

    }

    /***
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;

    }

    /***
     * @param $email
     */
    public function setEmail($email)
    {
        $this->email = $email;

    }

    /***
     * @param $telePhone
     */
    public function setTelePhone($telePhone)
    {
        $this->telephone = $telePhone;

    }

    /***
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

    }


    /***
     * create-qr-code
     * @return string
     */
    public function createQrCode(){
        $qrId =  uniqid("qrCode");
        $filepath = "images/$qrId.png";

        $codeContents = "name: $this->name , email: $this->email , telephone: $this->telephone , address: $this->address  , url: $this->url";

        QRcode::png($codeContents, $filepath, QR_ECLEVEL_H, 10);


        $QR = imagecreatefrompng($filepath);

        imagepng($QR, $filepath);


        return $filepath;

    }

}