<?php
    session_start();
?>
<?php
    require_once "../t00/connection/config.php";
    $login = $password = "";
    $username_err = $password_err = $login_err = "";
    if(empty($_POST["username"])){
        $username_err = "Please enter username.";
    } else{
        $login = $_POST["username"];
    }
    
    if(empty($_POST["password"])){
        $password_err = "Please enter your password.";
    } else{
        $password = $_POST["password"];
    }

    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT login, pass, status FROM users WHERE login = ? AND pass = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "ss", $param1, $param2);
            
            $param1 = $login;
            $param2 = $password;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){ 
                    mysqli_stmt_bind_result($stmt, $username, $pass, $status);
                    if(mysqli_stmt_fetch($stmt)){
                        $_SESSION["loggedin"] = true;
                        $_SESSION["username"] = $login;
                        $_SESSION["status"] = $status;
                        header("location: welcome.php");
                    }else{
                        echo "Invalid login or password";
                    }
                }else{
                    echo "Invalid login or password";
                }
            }else{
                echo "OOOPS";
            }
            mysqli_stmt_close($stmt);
        }
        
    }
    mysqli_close($link);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
   <center> <div class="Login">
            <h2>Login</h2>
            <p>Please fill in your credentials to login.</p>

            <form action="login.php" method="post">
                <div class="form-group">
                    <label>Login</label>
                    <input type="text" name="username">
                </div>    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <div class="form-group">
                    <input type="submit" class="sub" value="Login">
                </div>
                <p>Don't have an account? <a href="../t00/index.php">Sign up now</a>.</p>
                <p>Forgot your password? <a href="../t02/reminder.php">Remind it</a>.</p>
            </form>
    </div></center>
</body>
</html>