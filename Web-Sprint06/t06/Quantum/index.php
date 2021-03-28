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
            $quantYear = $differ->format("%Y") - 70;
            $quantMon = $differ->format("%m") + 4;
            $quantDay = $differ->format("%d");
            return [$quantYear, $quantMon, $quantDay];
    
        }
        $time = calculate_time();
        echo "\nIn quantum space you were absent for " . $time[0] . " years, " .
            $time[1] . " months, " . $time[2] . " days\n";

    ?>

</body>  

</html>