<?php
    include 'connection.php';
    class userRecord extends connection{
        
        public function check()
        {
            $this->connected();   
        }
        
        /************* Executing Query **********/

        public function ExecuteQuery()
        {
            $query ="CREATE TABLE IF NOT EXISTS Users (
                ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                Name VARCHAR(20) NOT NULL,
                Password VARCHAR(20)NOT NULL,
                Email VARCHAR(20) NOT NULL ,
                Address VARCHAR(40) NOT NULL ,
                City VARCAHRA(40) NOT NULL ,
                Province VARCHAR(20) NOT NULL ,
                ZipCode INT(5) NOT NULL )";
            echo $this->connect;
            if($this->connect->query($query) === TRUE)
            {
                echo "Table is created successfully !";
            }
            else{
                echo "An Error occured";
            }
        }            
    }   
    $addUser = new userRecord();
    $addUser->check();
    $addUser->ExecuteQuery();   
?>