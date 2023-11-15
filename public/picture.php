<?php

namespace Antorit;

class Picture
{
   private $imagePath;

    public function __construct() {
        $this->imagePath = dirname(__FILE__) .'/img/';
       var_dump($this->imagePath);
    }

    public function readDirectory() {
        if (is_dir($this->imagePath))
        {
            if ( $handle = opendir($this->imagePath) )
            {
                var_dump('wr111');
                while (($file = readdir($handle)) !== false)
                {
                    var_dump(getimagesize($this->imagePath.$file));
                    if ($this->getFileType($file) === "png") {
                        $this->createFromPng($file);
                    } elseif ($this->getFileType($file) === "jpg") {
                        $this->createFromJpeg($file);
                    }


                }
                closedir($handle);
            }
        }
    }

    private function getFileType($fileName = ""): string
    {
        $aFile = explode( ".", $fileName);
        return (is_array($aFile)) ? array_pop($aFile) : "";
    }

    private function createFromPng($fileName = ""): void
    {
        $newName = str_replace(".png", ".webp", $fileName);
        $img = imagecreatefrompng($this->imagePath . $fileName);

        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imagewebp($img, $this->imagePath  . $newName, 100);
        imagedestroy($img);
    }

    private function createFromJpeg($fileName = ""): void
    {
        $newName = str_replace(".jpg", ".webp", $fileName);
        $img = imagecreatefromjpeg($this->imagePath . $fileName);

        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imagewebp($img, $this->imagePath  . $newName, 80);
        imagedestroy($img);
    }
}

$job = new Picture();
$job->readDirectory();








