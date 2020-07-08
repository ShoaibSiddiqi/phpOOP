<?php
    class User{
        /************** Member variables *****************/
        private $userName;
        private $userPassword;
        private $userEmail;
        private $userAddress;
        private $userCity;
        private $userProvince;
        private $userZipCode;

        /************** Member Fuctions *****************/
        
        public function __construct($name,$pass,$email,$addr,$city,$prov,$zipcode)
        {
            $this->userName = $name;
            $this->userPassword = $pass;
            $this->userEmail = $email;
            $this->userAddress = $addr;
            $this->userCity = $city;
            $this->userProvince = $prov;
            $this->userZipCode = $zipcode;
        }
        public function display()
        {
            echo "Welcome to the display functipon of user class ";
            echo $this->userName;
            echo $this->userPassword;
            echo $this->userEmail;
            echo $this->userAddress;
            echo $this->userCity;
            echo $this->userProvince;
            echo $this->userZipCode;
        }

    }
?>