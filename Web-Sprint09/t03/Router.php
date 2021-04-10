<?php
    class Router{
        public $params = array();
        function set(){
            if($_GET){
                foreach($_GET as $id => $value){
                    $this->params[$id] = $value;
                }
            }
        }

        function printing(){
            $print = '{';
            if($this->params){
                foreach($this->params as $id => $value){
                    $print .= "'$key': '$value', ";
                }
            }
            $print = substr($print, 0, -2);
            $print .= "}";
            echo $print;
        }
    }

?>