<?php
    function total($addCount, $addPrice, $currentTotal = 0) {
        $add = 0;
        for($i = 0; $i< $addCount; $i++){
            $add += $addPrice;
        }
        $currentTotal += $add;
        return $currentTotal;
    }
?>
