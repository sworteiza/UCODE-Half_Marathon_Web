<?php
    function checkDivision($start=1, $end=60){
        for($i = $start; $i <= $end; $i++){
            if($i % 2 == 0 && $i % 3 == 0 && $i % 10 == 0){
                echo "The number $i is divisible by 2, is divisible by 3, is divisible by 10\n";
            }
            elseif($i % 2 == 0 && $i % 3 == 0){
                echo "The number $i is divisible by 2, is divisible by 3\n";
            }
            elseif($i % 3 == 0 && $i % 10 == 0){
                echo "The number $i is divisible by 3, is divisible by 10\n";
            }
            elseif($i % 2 == 0 && $i % 10 == 0){
                echo "The number $i is divisible by 2, is divisible by 10\n";
            }
            elseif($i % 2 == 0){
                echo "The number $i is divisible by 2\n";
            }
            elseif($i % 3 == 0){
                echo "The number $i is divisible by 3\n";
            }
            elseif($i % 10 == 0){
                echo "The number $i is divisible by 10\n";
            }
            else{
                echo "The number $i -\n";
            }
        }
        
    }
    
?>