<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Router</h1>

    <?php
        if($_GET){
            require_once("Router.php");
            $obj = new Router();
            $obj->set();
            $obj->print();
        }
    ?>
</body>
</html>