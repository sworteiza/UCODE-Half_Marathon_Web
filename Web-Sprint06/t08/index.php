<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form</title>
</head>
<body>
    <h1>What Thanos did for the Soul Stone?</h1>
    <form action="index.php" method="post">
    <input type="radio" value="not" name="variant">Jumped from the mountain</input>
    <br>
    <input type="radio" value="not" name="variant">Made stone keeper to jump from the mountain</input>
    <br>
    <input type="radio" value="right" name="variant">Pushed Gamora off the mountain</input>
    <br> <br>
    <input type="submit" value="I made a choice!"></input>
    </form>

    <?php
        if($_POST['variant'] == 'not'){
            echo "<p>Shame on you! Go and watch Avengers!</p>";
        }
        else{
            echo "<p>Yea, man, you are right</p>";
        }
    ?>
    
</body>
</html>