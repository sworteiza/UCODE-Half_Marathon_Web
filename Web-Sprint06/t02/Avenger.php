<?php
    class Avenger{
        function __construct($name, $alias, $gender, $age, $power, $hp){
            $this->name = $name;
            $this->alias = $alias;
            $this->gender = $gender;
            $this->age = $age;
            $this->power = $power;
            $this->hp = $hp;
        }
        function __toString(){
            return "name: {$this->name}\ngender: {$this->gender}\nage: {$this->age}\n";
        }
        function __invoke(){
            $al = strtoupper($this->alias);
            echo "$al\n";
            for($i = 0; $i < count($this->power); $i++){
                echo "{$this->power[$i]}\n";
            }
        }
    }

?>