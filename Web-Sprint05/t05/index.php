<?php

    class StrFrequency{
        public $str;
        function __construct($str){
            $this->str = $str;
        }

        function reverseString(){
            return strrev($this->str);
        }

        function letterFrequencies(){
            $alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $freq = [];
            $string = strtoupper($this->str);
            for($i = 0; $i < strlen($alpha); $i++){
                $freq_let = 0;
                for($j = 0; $j < strlen($string); $j++){
                    if($string[$j] == $alpha[$i]){
                        $freq_let++;
                    }
                }
                if($freq_let != 0)
                $freq[$alpha[$i]] = $freq_let;
            }
            return $freq;
        }

        function wordFrequencies(){
            $arr = [];
            $string = strtoupper($this->str);
            $arr = array_count_values(str_word_count($string, 1));
            return $arr;
        }
    }

?>