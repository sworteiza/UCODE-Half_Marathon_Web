<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Quantum space</title>
</head>

<body>
    <?php
        function calculate_time(){
            $past = date_create('1939-01-01');
            $present = date_create('now');
            $differ = date_diff($past, $present);
            return $differ;
        }
        $time = calculate_time();
        echo "<p>In real life you were absent for " . $time->format("%Y") . " years, " .
            $time->format("%m") . " months, " . $time->format("%d") . " days</p>";

    ?>

</body>  

</html>