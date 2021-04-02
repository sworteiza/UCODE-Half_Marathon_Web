<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <h1>Files</h1>
    
    <form action="index.php"  method="post">
        Filename: <input type="text" name="in">
        Content: <textarea name="content" cols="20" rows="3"></textarea>
        <input type="submit" value="Create file">
    </form>

    <?php
        function autoload($pClassName){
            include(__DIR__. '/' . $pClassName. '.php');
        }
        spl_autoload_register("autoload");
        if($_POST){
           echo' <h1>List of files:</h1>';
           if($_POST["in"]){
               $files = new FilesList("tmp");
               $list = $files->htList();
               $file = new File($_POST["in"]);
               $file->write($_POST["content"]);
           }
        }

        $files = new FilesList("tmp");
        $list = $files->htList();
        if($list){
            echo $list;
        }
        if($_GET){
            $file = new File($_GET["in"]);
            $in = $file->read();
            $name = "tmp/".$_GET["in"];
            echo '<h1>Selected files: <i> $name </i></h1>';
            echo '<form action="index.php" method="post">
                    <input type="submit" name="delete" value="Delete file">
            </form>';
            echo 'Content: $content<br>';
        }


    ?>
</body>
</html>