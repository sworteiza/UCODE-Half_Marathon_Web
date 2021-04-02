<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="adress">
        <input type="submit" value="Go">
        <a href="back">BACK</a>
    </form>

    <?php
        if($_GET){
            $url = $_GET["adress"];
            $string;
            echo 'url: '.$url;
            echo "\n";
            if($url){
                $string = file_get_contents($url);
                $output = [];
                $output = explode("<body>", $string)[1];
                $output = explode("</body>", $output)[0];

                $output = str_replace("<", "&lt", $output);
                $output = str_replace(">", "&gt", $output);
                $output = nl2br($output);

                echo "<body>\n" . $output . "\n</body>";

            }
        }

    ?>
    
</body>
</html>