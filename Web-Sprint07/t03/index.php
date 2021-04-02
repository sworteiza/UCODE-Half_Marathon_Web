<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Change charset: <input type="text" placeholder="Input string" name="str"><br><br>
        Select charset of several charsets: 
        <select name="select[]" size="3" multiple>
            <option value="c1">UTF-8</option>
            <option value="c2">ISO-8859-1</option>
            <option value="c3">Windows-1252</option>
        </select>
        <input type="submit" value="Change charset">
        <input type="reset" value="Clear">
    
    </form>
    <?php
        if($_POST){
            $string = $_POST["str"];
            echo '
                <form action="index.php" method="post">
                    Input string: 
                    <textarea name="" cols="16" rows="4" placeholder="$ and € are a currency">'. $string .'</textarea>
                </form>
            
            ';

            if($_POST["select"]){
                foreach($_POST["select"] as $select)
                {
                    if($select == "c1"){
                    $str = mb_convert_encoding($_POST["str"], "UTF-8");
                    echo '
                    <form action="index.php" method="post">
                        UTF-8: 
                        <textarea name="" cols="16" rows="4" placeholder="$ and € are a currency">'. $str .'</textarea>
                    </form>
                
                        ';
                    }

                    if($select == "c2"){
                        $st = mb_convert_encoding($_POST["str"], "ISO-8859-1");
                        echo '
                        <form action="index.php" method="post">
                            ISO-8859-1: 
                            <textarea name="" cols="16" rows="4" placeholder="$ and € are a currency">'. $st .'</textarea>
                        </form>
                    
                        ';
                    }  

                    if($select == "c3"){
                        $s = mb_convert_encoding($_POST["str"], "Windows-1252");
                        echo '
                        <form action="index.php" method="post">
                            Windows-1252: 
                            <textarea name="" cols="16" rows="4" placeholder="$ and € are a currency">'. $s .'</textarea>
                        </form>
                    
                        ';
                    }  
                }
               
            }
           
        }
    ?>
    
</body>
</html>