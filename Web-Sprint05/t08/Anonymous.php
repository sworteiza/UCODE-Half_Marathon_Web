<?php

function get_anonymous($name, $alias, $affiliation){
    return new class($name, $alias, $affiliation){
        private $name;
        private $alias;
        private  $affiliation;
        function __construct($name, $alias, $affiliation) {
            $this->name = $name;
            $this->alias = $alias;
            $this->affiliation = $affiliation;
        }
        function getName(){
            echo "$this->name\n";
        }
        function getAlias(){
            echo "$this->alias\n";
        }
        function getAffiliation(){
            echo "$this->affiliation\n";
        }
    };
}

?>