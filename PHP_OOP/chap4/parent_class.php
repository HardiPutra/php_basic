<?php

class Programmer
{
    public static function makeSystem()
    {
        echo "Start coding<br/>";
    }
}

class AmatureProgrammer extends Programmer
{
    public static function makeSystem()
    {
        echo "Membaca dokumnetasi<br/>";
        parent::makeSystem() . "<br/>";
        echo "Bersihkan mess <br/>";
    }
}

echo "Programmer: <br/>";
echo Programmer::makeSystem();

echo "Amature Programmer: <br/>";
echo AmatureProgrammer::makeSystem();

class Image
{
    public static $resizeStatus = true;
    public static function geometry()
    {
        echo "760X300";
    }
}

class PhotoProfile extends Image
{
    public static function geometry()
    {
        if (self::$resizeStatus) {
            echo "50X50";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br/>";
echo PhotoProfile::geometry() . "<br/>";

Image::$resizeStatus = false;
echo PhotoProfile::geometry() . "<br/>";