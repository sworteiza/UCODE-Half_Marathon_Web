<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forme</title>
</head>
<body>
    <h1>Session for new</h1>
    <form action="index.php" method="post">
    <fieldset>
    <legend>About Hero</legend>
        Real Name: <input type="text" name="name" placeholder="Tell your name">
        Current Alias: <input type="text" name="alias" placeholder="Tell your alias">
        Age: <input type="text" name="age"><br><br>
        About: <textarea name="about" rows="5" cols="40" placeholder="Tell about yourself"></textarea><br><br>
        Photo: <input type="file" name="file"><br>
    </fieldset>

    <fieldset>
    <legend>Powers</legend>
        <input type="checkbox" name="c1"> Strength
        <input type="checkbox" name="c2"> Speed
        <input type="checkbox" name="c3"> Intelligence
        <input type="checkbox" name="c4"> Teleportation
        <input type="checkbox" name="c5"> Immortal
        <input type="checkbox" name="c6"> Another <br><br>
        Level of control: <input type="range" name="range" min="0" max="10">
    </fieldset>

    <fieldset>
    <legend>Publicity</legend>
        <input type="radio" name="p" value="1"> UNKNOWN
        <input type="radio" name="p" value="2"> LIKE A GHOST
        <input type="radio" name="p" value="3"> I AM IN COMICS
        <input type="radio" name="p" value="4"> I HAVE FUN CLUB
        <input type="radio" name="p" value="5"> SUPERSTAR
    </fieldset>
    <br>
    <input type="reset" value="Clear" name="clear">
    <input type="submit" name="submit" value="Submit">  
    </form>

    <?php
        if($_POST){
        $name = $email = $age = $about = $photo = "";
        $count = 0;
        $count1 = 0;
        $checked_arr = [$_POST["c1"], $_POST["c2"], $_POST["c3"], 
            $_POST["c4"], $_POST["c5"], $_POST["c6"]];
        
        for($i = 0; $i<count($checked_arr); $i++){
            if($checked_arr[$i] == "on"){
                $count++;
            }
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = test_input($_POST["name"]);
            $alias = test_input($_POST["alias"]);
            $age = test_input($_POST["age"]);
            $about = test_input($_POST["about"]);
            $photo = test_input($_POST["file"]);
          }

        echo "<h1>Session for new</h1>";
        echo "name: " . $name;
        echo "<br>";
        echo "alias: " . $alias;
        echo "<br>";
        echo "age: " . $age;
        echo "<br>";
        echo "description: " . $about;
        echo "<br>";
        echo "photo: " . $photo;
        echo "<br>";
        echo "experience: " . $count;
        echo "<br>";
        echo "level: " . $_POST["range"];
        echo "<br>";
        echo "purpose: " . $_POST["p"];
        echo "<br>";

        echo '<br><form>
            <fieldset>
                <input type="submit" value="FORGET">
            </fieldset>
            </form>';

        }

    ?>
    
</body>
</html>