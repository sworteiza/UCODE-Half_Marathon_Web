<?php
    class Overload{
        public $data = [];
        function __get($id){
            if(array_key_exists($id, $this->data)){
                return $this->data[$id];
            }
            else{
                $str = "NO DATA";
                return $str;
            }
        }
        function __set($id, $val){
            $this->data[$id] = $val;
        }
        function __isset($id){
            if(array_key_exists($id, $this->data)){
                return isset($this->data[$id]);
            }
            else{
                $this->data[$id] = "NOT SET";
                return $this->data[$id];
            }
        }
        function __unset($id){
            if(array_key_exists($id, $this->data)){
                unset($this->data[$id]);
            }
            else{
                $this->data[$id] = NULL;
            }
        }
    }


?>