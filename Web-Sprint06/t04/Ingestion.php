<?php
    class  Ingestion{
        public $id;
        public $meal_type = [];
        public $day_of_diet;
        public $products = [];

        function __construct($meal_type, $id){
            $this->meal_type = $meal_type;
            $this->id = $id;
        }

        function getProducts(){
            return $this->products;
        }

        function setProduct($value){
            $this->products[$value->getName()] = $value;
        }

        function get_from_fridge($product){
            if($this->products[$product]->getKcal() > 200){
                throw new EatException("No more junk food, dumpling");
            }
        }

    }

?>