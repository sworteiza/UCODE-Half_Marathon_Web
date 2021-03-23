<?php
    function firstUpper($str){
        $str = trim($str);
        $str = strtolower($str);
        $str = ucfirst($str);
        return $str;
    }
?>