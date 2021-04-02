<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1><center>Make square image</center></h1>
    <center><form action="index.php" method="post">
        <input type="text" name="url"><br><br>
        <input type="submit" value="GO">
    </form></center>

    <?php
        if($_POST['url']) {
            $url = $_POST['url'];
            $first = 'first.jpg';
            $url1 = curl_init($url);
            $fp = fopen($first, 'wb');
            curl_setopt($url1, CURLOPT_FILE, $fp);
            curl_setopt($url1, CURLOPT_HEADER, 0);
            curl_exec($url1);
            curl_close($url1);
            fclose($fp);
    
            $red = imagecreatefromjpeg($first);
            imagefilter($red, IMG_FILTER_COLORIZE, 255, 0, 0);
            imagejpeg($red, "second.jpg");
    
            $green = imagecreatefromjpeg($first);
            imagefilter($green, IMG_FILTER_COLORIZE, 0, 255, 0);
            imagejpeg($green, "third.jpg");
    
            $blue = imagecreatefromjpeg($first);
            imagefilter($blue, IMG_FILTER_COLORIZE, 0, 0, 255);
            imagejpeg($blue, "forth.jpg");
    
            echo("<div class=\"grid\">");
            echo("<img src=\"first.jpg\" width=\"400\" height=\"400\">");
            echo("<img src=\"second.jpg\" width=\"400\" height=\"400\">");
            echo("<img src=\"third.jpg\" width=\"400\" height=\"400\">");
            echo("<img src=\"forth.jpg\" width=\"400\" height=\"400\">");
            echo("</div>");
        }
    ?>
</body>
</html>