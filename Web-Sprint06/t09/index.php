<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forme</title>
</head>
<body>
    <h1>New Avenger application</h1>
    <form action="index.php" method="post">
    <fieldset>
    <legend>About Candidate</legend>
        Name: <input type="text" name="name" placeholder="Tell your name">
        E-mail: <input type="text" name="email" placeholder="Tell your e-mail">
        Age: <input type="text" name="age"><br><br>
        About: <textarea name="about" rows="5" cols="40" placeholder="Tell about yourself"></textarea><br><br>
        Your photo: <input type="file" name="file"><br>
    </fieldset>
    <br>
    <input type="reset" value="Clear" name="clear">
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
        $name = $email = $age = $about = $photo = "";
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $email = test_input($_POST["email"]);
            $age = test_input($_POST["age"]);
            $about = test_input($_POST["about"]);
            $photo = test_input($_POST["file"]);
          }

        echo "<h2>Your application:</h2>";
        echo $name;
        echo "<br>";
        echo $email;
        echo "<br>";
        echo $age;
        echo "<br>";
        echo $about;
        echo "<br>";
        echo $photo;
        echo "<br>";

    ?>
    
</body>
</html>