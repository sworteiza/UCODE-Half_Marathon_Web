<?php
    interface ControllerInterface{
        function __construct();
        function execute();
    }
    class Main implements ControllerInterface{
        function __construct($view){
            $this->view = $view;
        }

        function execute(){
            if($this->view){
                $this->view->render();
            }
        }
    }


?>