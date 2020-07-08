<?php
    class connection{
        private $Server = "localhost";
        private $user = "root";
        private $password = "";
        private $databaseName = "oop";

        public $connect;

        //******************Creating Database Connection  ************/
        protected function connected()
        {
            if(!isset($this->connect))
            {
                $this->connect = new mysqli($this->Server,$this->user,$this->password,$this->databaseName);
                echo "connection created successfully !!!";
            }
            else
            {
                echo "There is an error";
            } 
            
            if ($this->connect->connect_error) {
                die("Connection failed: " . $this->connect->connect_error);
              }
            echo "Connected successfully";
        } 
    } 
        
?>
