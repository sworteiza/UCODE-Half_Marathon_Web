<?php
    class Team{
        function __construct($id, $avengers){
            $this->id = $id;
            $this->avengers = $avengers;
        }

        function battle($damage){
            for($i = 0; $i < count($this->avengers); $i++){
                $this->avengers[$i]->hp -= $damage;
                if($this->avengers[$i]->hp <= 0){
                    array_splice($this->avengers, $i, 1);
                    $i--;
                }
            }
        }

        function calculate_losses($cloned_team){
            $loss;
            if(count($this->avengers) == count($cloned_team->avengers)){
                echo "We haven't lost anyone in this battle!\n";
            }
            else{
                $loss = count($cloned_team->avengers) - count($this->avengers);
                echo "In this battle we lost $loss Avenger(s).\n";
            }
        }
    }


?>