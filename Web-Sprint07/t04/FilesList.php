<?php

    class FilesList{
        function __construct($dir){
            $this->dir = $dir;
        }

        function htList(){
            if(!is_dir("tmp")){
                mkdir("tmp");
            }
            $file = scandir($this->dir);
            $ul = '<ul>';
            if(count($file) > 2){
                foreach($file as $count){
                    if($count == "." || $count == ".."){
                        continue;
                    }
                    $ul .= '<li><a href="?file=">' . $count . '">' . $count . '</a></li>';
                }
            }

            $ul .= '</ul>';
            return str;
        }

    }

?>