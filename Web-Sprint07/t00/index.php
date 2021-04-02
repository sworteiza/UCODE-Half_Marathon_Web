<?php
    $cookie_name = "count";
    if($_COOKIE[$cookie_name]){
        setcookie($cookie_name, $_COOKIE[$cookie_name]+1, time() + 60);
    }else{
        setcookie($cookie_name, 1, time() + 60);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>t00</title>
</head>
<body>
    <h1>Cookie counter</h1>

    <?php
        echo "This page was loaded " . $_COOKIE[$cookie_name] . " times(s) is last minute";

    ?>
    
</body>
</html>