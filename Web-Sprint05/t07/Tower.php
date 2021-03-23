<?php

    class Tower extends Building{
        private $elevator;
        private $arc_capacity;
        private $height;

        public function hasElevator(){
            $str = "+";
            if($this->elevator == true)
            {
                return $str;
            }
            else{
                $str = "-";
                return $str;
            }
        }

        public function setElevator($elevator){
            $this->elevator = $elevator;
        }

        public function getArcCapacity(){
            return $this->arc_capacity;
        }

        public function setArcCapacity($arc_capacity){
            $this->arc_capacity = $arc_capacity;
        }

        public function getHeight(){
            return $this->height;
        }

        public function setHeight($height){
            $this->height = $height;
        }

        public function getFloorHeight(){
            return $this->height / $this->floors;
        }

    }

?>