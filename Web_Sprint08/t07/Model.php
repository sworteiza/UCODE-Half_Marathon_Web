<?php
    abstract class Model
    {
        protected $tb;
        protected $connect;
        public function __construct($connect,$tb)
        {
            $this->settb($tb);
            $this->setConnection($connect);
        }
    
        protected function settb($tb){
            $this->tb = $tb;
        }
    
        protected function setConnection($connect){
            $this->connect = $connect;
        }
    
        abstract public function find($id);
    
        abstract public function delete();
    
        abstract  public function save();
    
    }

?>