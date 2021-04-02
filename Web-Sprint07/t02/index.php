<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Password</h1>

    <?php
        if(!$_POST){
            $_SESSION = [];
            echo '
                <form action="index.php" method="post">
                Password not saved in session. <br>
                Password for saving to session <input type="text" name="pass" placeholder="Password to session"> <br>
                Salt for saving to session <input type="text" name="salt" placeholder="Salt to session"><br>
                <input type="submit" value="Save">
                </form>
            ';
        }else if(!$_POST["check"]){
            $hash;
            $pass = $_POST["pass"];
            $salt = $_POST["salt"];
            $_SESSION["pass"] = $pass;
            $_SESSION["salt"] = $salt;
            $hash = md5($pass . $salt);
            $_SESSION["hash"] = $hash;
            echo '
                <form action="index.php" method="post">
                    Password saved at session. <br>
                    Hash is ' . $_SESSION["hash"] .

                    '<br>
                    Try to guess: <input type="text" name="check">
                    <input type="submit" value="Check password"><br>
                    <input type="reset" value="Clear">
                
                </form>
            ';
            
        }else if($_POST["check"]){
            if($_POST["check"] == $_SESSION["pass"]){
                echo '
                    <form action="index.php" method="post">
                        <label style="color: green;">Hacked!</label><br><br>
                        Password not saved in session. <br>
                        Password for saving to session <input type="text" name="pass" placeholder="Password to session"> <br>
                        Salt for saving to session <input type="text" name="salt" placeholder="Salt to session"><br>
                        <input type="submit" value="Save">
                    </form>
                ';
               
            }else{
                echo '
                    <form action="index.php" method="post">
                        <label style="color: red;">Access denied!</label><br><br>
                        Password not saved in session. <br>
                        Password for saving to session <input type="text" name="pass" placeholder="Password to session"> <br>
                        Salt for saving to session <input type="text" name="salt" placeholder="Salt to session"><br>
                        <input type="submit" value="Save">
                    </form>
                ';
            }
        }
        

    ?>
    
</body>
</html>