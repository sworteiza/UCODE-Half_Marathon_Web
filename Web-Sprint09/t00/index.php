<?php
    require_once("connection/config.php");
    $username = $password = $confirm_password = $name = $email = "";
    $username_err = $password_err = $confirm_password_err = "";
    if($_POST){
        $username = $_POST['login'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $name = $_POST['name'];
        $email = $_POST['mail'];
        if($password != $confirm_password){
            $confirm_password_err = "Password did not match.";
        }
        if(empty($username)){
           $username_err = "Please enter a username.";
        }
        if(empty($password)){
            $password_err = "Please enter a password.";
        } 
        if(empty($confirm_password_err) && empty($password_err) && empty($username_err)){
            $sql = "INSERT INTO users (login, pass, name, email) VALUES (?, ?, ?, ?)";
            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "ssss", $param1, $param2, $param3, $param4);
                $param1 = $username;
                $param2 = $password;
                $param3 = $name;
                $param4 = $email;
                if(mysqli_stmt_execute($stmt)){
                    
                    header("Location: ../t01/login.php");
                    die();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
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
    <title>Regist</title>
</head>
<body>
    <center><div class="Registration">
            <h2>Sign Up</h2>
            <p>Please fill this form to create an account.</p>
            <form action="index.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="login" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                    <span class="invalid-feedback"><?php echo $username_err; ?></span>
                </div>    
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                    <span class="invalid-feedback"><?php echo $password_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                    <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                </div>
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" name="mail">
                </div>
                <div class="form-group">
                    <div class="butt">
                    <input type="submit" class="sub" value="Submit">
                    <input type="reset" class="res" value="Reset">
                    </div>
                </div>
                <p>Already have an account? <a href="../t01/login.php">Login here</a>.</p>
            </form>
        </div></center>      
</body>
</html>
