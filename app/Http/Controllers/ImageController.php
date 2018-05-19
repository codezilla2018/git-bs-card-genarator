<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function genarateImage()
    {
        // Create a blank image and add some text
        $im = imagecreatetruecolor(120, 300);
        $text_color = imagecolorallocate($im, 220, 14, 97);
        imagestring($im, 5, 5, 5,  'A Simple Text String', $text_color);
        imagestring($im, 1, 5, 20,  'A Simple Text String', $text_color);
        imagestring($im, 1, 5, 50,  'A Simple Text String', $text_color);

// Set the content type header - in this case image/jpeg


// Output the image

        imagepng($im, './test/stringup.png');

// Free up memory
        imagedestroy($im);







    }





}
