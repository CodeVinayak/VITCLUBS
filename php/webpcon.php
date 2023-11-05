<?php
function webpCon($file, $imagename, $w, $h, $ext)
{
    if ($ext != ".png") {
        // imgResize($file, $imagename, $w, $h, $ext);
        _alert("few");
        $image = imagecreatefromstring(file_get_contents("$file" . "$imagename" . "$ext"));
        ob_start();
        imagejpeg($image, NULL, 100);
        $cont = ob_get_contents();
        ob_end_clean();
        imagedestroy($image);
        $content = imagecreatefromstring($cont);
        $output = $file . $imagename . '.webp';
        imagewebp($content, $output);
        imagedestroy($content);
        // Delete old file
        $status = unlink($file . $imagename . $ext);
        if (!$status) {
            echo "Failed to delete old file!";
        }
    } else {
        list($width, $height) = getimagesize("$file" . "$imagename" . "$ext");
        $nwidth = $w;
        $nheight = $h;
        $newimage = imagecreatetruecolor($nwidth, $nheight);
        $source = imagecreatefrompng("$file" . "$imagename" . "$ext");
        imagecopyresized($newimage, $source, 0, 0, 0, 0, $nwidth, $nheight, $width, $height);
        imagepng($newimage, "$file" . "$imagename" . "$ext");


        $img = imagecreatefrompng("$file" . "$imagename" . "$ext");
        imagepalettetotruecolor($img);
        imagealphablending($img, true);
        imagesavealpha($img, true);
        imagewebp($img, "$file" . "$imagename" . ".webp", 100);
        imagedestroy($img);
        $status = unlink($file . $imagename . $ext);
        if (!$status) {
            echo "Failed to delete old file!";
        }
    }
}


function imgResize($file, $imagename, $w, $h, $ext)
{
    list($width, $height) = getimagesize("$file" . "$imagename" . "$ext");
    $nwidth = $w;
    $nheight = $h;
    $newimage = imagecreatetruecolor($nwidth, $nheight);
    $source = imagecreatefromjpeg("$file" . "$imagename" . "$ext");
    imagecopyresized($newimage, $source, 0, 0, 0, 0, $nwidth, $nheight, $width, $height);
    imagejpeg($newimage, "$file" . "$imagename" . "$ext");
}

?>