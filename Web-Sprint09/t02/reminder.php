<?php
    require_once "../t00/connection/config.php";
    $email = $password = "";
    $email_err = "";
    $message = "Your password is ";
    if(empty($_POST["mail"])){
        $email_err = "Please enter e-mail.";
    } else{
        $email = $_POST["mail"];
    }
    if(empty($email_err)){
        $sql = "SELECT email, pass FROM users WHERE email = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param1);
            $param1 = $email;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){ 
                    mysqli_stmt_bind_result($stmt, $mail, $pass);
                    if(mysqli_stmt_fetch($stmt)){
                        $message .= $pass;
                        mail($mail, "Reminder", $message);
                    }
                }
            }
            mysqli_stmt_close($stmt);
        }
        mysqli_close($link);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="Remind">
    <center><h2>Reminder</h2>
    <p>Please write in your e-mail.</p>
    <form action="reminder.php" method="post">
        <div class="form-group">
            <label>E-mail</label>
            <input type="text" name="mail">
        </div>
        <div class="form-group">
            <input type="submit" class="sub" value="Remind me">
        </div> 
    </form></center>
    </div>
</body>
</html>