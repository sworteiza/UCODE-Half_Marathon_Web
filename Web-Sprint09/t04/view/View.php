<?php
    class View{
        function __construct($path){
            $this->path = $path;
        }

        function render(){
            ob_clean();
            $file = file_get_contents($this->path);
            if($file){
                echo $file;
                return true;
            }
            else{
                return false;
            }
        }
    }
?>