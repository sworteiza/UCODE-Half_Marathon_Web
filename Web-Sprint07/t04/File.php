<?php

    class File{
        function __construct($file){
            $this->file = 'tmp/'.$file;
        }

        function write($in){
            $file = fopen($this->file, "w");
            fwrite($file, $in);
            fclose($file);
        }

        function read(){
            $file = fopen($this->file, "r");
            $str = fread($file, filesize($this->file));
            fclose($file);
            return $str;
        }

    }

?>