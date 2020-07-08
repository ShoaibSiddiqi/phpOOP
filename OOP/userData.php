<?php
    include 'user.php';

    $userName = $_POST['user-name'];
    $userPassword = $_POST['user-pass'];
    $userEmail = $_POST['user-email'];
    $userAddress = $_POST['user-address'];
    $userCity = $_POST['user-city'];
    $userProvince = $_POST['user-prov'];
    $userZipCode = $_POST['user-zipcode'];

    $New_User = new User($userName,$userPassword,$userEmail,$userAddress,$userCity,$userProvince,$userZipCode);
    //$New_User->display();
?>