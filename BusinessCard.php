<?php

/**
 * Created by PhpStorm.
 * User: sasika
 * Date: 5/20/2018
 * Time: 9:24 PM
 */
require_once("phpqrcode/qrlib.php");

class BusinessCard
{

    public $name;
    public $email;
    public $address = [];
    public $mobile;


    public function create()
    {
        $this->createQr();

        $logopath = 'test/myimage.png';
        $filepath = 'test/stringup.png';
        $im = imagecreatetruecolor(300, 120);
        $qrTest = imagecreatefromstring(file_get_contents("test/myimage.png"));

        imagealphablending($qrTest, false);
        imagesavealpha($qrTest, true);


        $text_color = imagecolorallocate($im, 220, 14, 97);
        imagestring($im, 5, 5, 5, $this->name, $text_color);
        imagestring($im, 1, 5, 20, $this->email, $text_color);
        imagestring($im, 1, 5, 50, $this->mobile, $text_color);


        $im_width = imagesx($im);
        $im_height = imagesy($im);

        $qrTest_width = imagesx($qrTest);
        $qrTest_height = imagesy($qrTest);

// Scale logo to fit in the QR Code
        $qrTest_qr_width = $qrTest_width / 3;
        $scale1 = $qrTest_width / $qrTest_qr_width;
        $qrTest_qr_height = $qrTest_height / $scale1;

        imagecopyresampled($im, $qrTest, $im_width / 3, $im_height / 3, 0, 0, $qrTest_qr_width, $qrTest_qr_height, $qrTest_width, $qrTest_height);
// Set the content type header - in this case image/jpeg


// Output the image

        imagepng($im, './test/stringup.png');
        imagecreatefromstring(file_get_contents($logopath));
// Free up memory
        imagedestroy($im);


// Ouput image in the browser
        echo '<img src="' . $filepath . '" />';


    }


    public function checkAddress()
    {
        $address = $this->address;
        if (count($this->address) > 3) {
            return false;
        } else {
            return true;
        }

    }


    public function createQr()
    {

        $filepath = 'test/myimage.png';

        $logopath = 'test/stringup.png';

        $codeContents = 'http://ourcodeworld.com';

        QRcode::png($codeContents, $filepath, QR_ECLEVEL_H, 10);


        $QR = imagecreatefrompng($filepath);


//        $logo = imagecreatefromstring(file_get_contents($logopath));
//
//
//        imagecolortransparent($logo, imagecolorallocatealpha($logo, 0, 0, 0, 127));
//        imagealphablending($logo, false);
//        imagesavealpha($logo, true);
//
//        $QR_width = imagesx($QR);
//        $QR_height = imagesy($QR);
//
//        $logo_width = imagesx($logo);
//        $logo_height = imagesy($logo);
//
//// Scale logo to fit in the QR Code
//        $logo_qr_width = $QR_width / 3;
//        $scale = $logo_width / $logo_qr_width;
//        $logo_qr_height = $logo_height / $scale;
//
//        imagecopyresampled($QR, $logo, $QR_width / 3, $QR_height / 3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

// Save QR code again, but with logo on it
        imagepng($QR, $filepath);

// End DRAWING LOGO IN QR CODE
    }


}
