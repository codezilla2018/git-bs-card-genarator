<?php

/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 5/20/2018
 * Time: 9:24 PM
 */
require_once("phpqrcode/qrlib.php");
require_once("QrcodeTemplate.php");
require_once("QrcodeTemplate.php");

class BusinessCard
{

    public $name = "";
    public $email = "";
    public $address = ["", "", ""];
    public $telePhone = 0;
    public $url = "";
    public $qrCodePath = "";
    public $template = 1 ;


    /***
     * create business-card
     */
    public function create()
    {

        $this->createQr();


        $logopath = $this->qrCodePath;
        $imageId = uniqid("card") . '.png';

        $filepath = "images/$imageId";
        $im = imagecreatetruecolor(330, 150);
        $qrTest = imagecreatefromstring(file_get_contents($logopath));

        imagealphablending($qrTest, false);
        imagesavealpha($qrTest, true);



        if($this->template == 1){
            $font = 'fonts/Electrolize-Regular.ttf';
            $name_color = imagecolorallocate($im, 100, 100, 100);
            $email_color = imagecolorallocate($im, 220, 100, 200);
            $telePhone_color = imagecolorallocate($im, 220, 100, 200);
            $address_color = imagecolorallocate($im, 250, 200, 200);
        }
        else if($this->template == 2){
            $font = 'fonts/BLKCHCRY.ttf';
            $name_color = imagecolorallocate($im, 240, 200, 100);
            $email_color = imagecolorallocate($im, 50, 100, 50);
            $telePhone_color = imagecolorallocate($im, 50, 100, 50);
            $address_color = imagecolorallocate($im, 50, 100, 50);
        }
        else if($this->template == 3){
            $font = 'fonts/EagleLake-Regular.ttf';
            $name_color = imagecolorallocate($im, 170, 200, 250);
            $email_color = imagecolorallocate($im, 200, 2000, 200);
            $telePhone_color = imagecolorallocate($im, 220, 100, 200);
            $address_color = imagecolorallocate($im, 250, 200, 200);
        }
        else if($this->template == 4){
            $font = 'fonts/BLKCHCRY.ttf';
            $name_color = imagecolorallocate($im, 100, 100, 100);
            $email_color = imagecolorallocate($im, 220, 100, 200);
            $telePhone_color = imagecolorallocate($im, 220, 100, 200);
            $address_color = imagecolorallocate($im, 250, 200, 200);
        }
        else if($this->template == 5){
            $font = 'fonts/SEA_GARDENS.ttf';
            $name_color = imagecolorallocate($im, 100, 100, 100);
            $email_color = imagecolorallocate($im, 220, 100, 200);
            $telePhone_color = imagecolorallocate($im, 220, 100, 200);
            $address_color = imagecolorallocate($im, 250, 200, 200);
        }
        else if($this->template == 6){
            $font = 'fonts/basictitlefont.ttf';
            $name_color = imagecolorallocate($im, 150, 90, 200);
            $email_color = imagecolorallocate($im, 250, 200, 200);
            $telePhone_color = imagecolorallocate($im, 250, 200, 200);
            $address_color = imagecolorallocate($im, 250, 200, 200);
        }
        else{
            $name_color = imagecolorallocate($im, 250, 50, 130);
            $email_color = imagecolorallocate($im, 220, 100, 200);
            $telePhone_color = imagecolorallocate($im, 220, 100, 200);
            $address_color = imagecolorallocate($im, 220, 100, 200);
        }




        imagettftext($im, 15, 0, 10, 30, $name_color, $font, $this->name);
        imagettftext($im, 10, 0,20, 45,$email_color,$font, $this->email);
        imagettftext($im, 10, 0,20, 60, $telePhone_color,$font,$this->telePhone);
        imagettftext($im, 9, 0,10, 125, $address_color,$font,$this->address[0] . " , " . $this->address[1] . " , " . $this->address[2]);



        $im_width = imagesx($im);
        $im_height = imagesy($im);

        $qrTest_width = imagesx($qrTest);
        $qrTest_height = imagesy($qrTest);


        $qrTest_qr_width = 70;
        $qrTest_qr_height = 70;

        imagecopyresampled($im, $qrTest, 220, 40, 0, 0, $qrTest_qr_width, $qrTest_qr_height, $qrTest_width, $qrTest_height);


        imagepng($im, $filepath);
        imagecreatefromstring(file_get_contents($logopath));

        imagedestroy($im);


        echo '<img src="' . $filepath . '" />';


    }

    /***
     * set-address
     * @param $addressLine1
     * @param $addressLine2
     * @param $addressLine3
     */
    public function setAddress($addressLine1, $addressLine2, $addressLine3)
    {
        $address = new Address();
        $address->set($addressLine1, $addressLine2, $addressLine3);

        $this->address = $address->get();

    }

    /***
     * create QR-image
     */
    public function createQr()
    {
        $Qr = new QrcodeTemplate();
        $Qr->setUrl($this->url);
        $Qr->setTelePhone($this->telePhone);
        $Qr->setEmail($this->email);
        $Qr->setName($this->name);
        $this->qrCodePath = $Qr->createQrCode();
    }

    /***
     * delete all-images
     */
    public function clearMemory()
    {
        $files = glob('images/*.png');
        foreach ($files as $file) {
            unlink($file);
        }
    }


}
