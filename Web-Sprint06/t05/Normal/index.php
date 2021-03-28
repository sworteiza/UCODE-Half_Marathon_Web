<?php
    namespace Space\Normal;

    function calculate_time(){
        $past = date_create('1939-01-01');
        $present = date_create('now');
        $differ = date_diff($past, $present);
        return $differ;
    }

?>