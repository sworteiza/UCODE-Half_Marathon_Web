<?php
    class EatException extends Exception{
        function __construct($message, $code = 0, Throwable $prev = NULL){
            parent::__construct($message, $code, $prev);
        }

        function __toString(){
            return $this->message;
        }
    }

?>