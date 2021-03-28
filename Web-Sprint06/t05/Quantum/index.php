<?php
    namespace Space\Quantum;

    function calculate_time(){
        $past = date_create('1939-01-01');
        $present = date_create('now');
        $differ = date_diff($past, $present);
        $quantYear = $differ->format("%Y") - 70;
        $quantMon = $differ->format("%m") + 4;
        $quantDay = $differ->format("%d");
        return [$quantYear, $quantMon, $quantDay];

    }
?>