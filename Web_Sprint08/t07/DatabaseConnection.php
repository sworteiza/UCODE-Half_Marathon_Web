<?php
    class DatabaseConnection{
        public $connection;
        function __construct($host, $port, $username, $password, $database){
            $this->connection = mysqli_connect($host, $username, $password, $database, $port);
        }

        function __destruct(){
            mysqli_close($this->connection);
        }

        function getConnectionStatus(){
            return ($this->connection) ? true : false;
        }

    }

?>