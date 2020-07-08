<?php
include 'views/header.php'?>
<body id="grad">
    <h1 class="text-center mx-4 my-4"> Registration Form</h1>
    <div class="container form-container">
        <form action="userData.php" method="Post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="uName"><b>Enter Name :</b></label>
                    <input type="text" class="form-control" id="uName" placeholder="Name" name="user-name">
                </div>
                <div class="form-group col-md-6">
                    <label for="pass"><b>Password</b></label>
                    <input type="password" class="form-control" id="pass" placeholder="Password" name="user-pass">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="Email"><b>Email</b></label>
                    <input type="text" class="form-control" id="Email" placeholder="abc2@gmail.com" name="user-email">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress"><b>Address</b></label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="user-address">
                </div>    
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city"><b>Select city :</b></label>
                    <select name="user-city" id="city" class="form-control">
                        <option value="Lahore">Lahore</option>
                        <option value="Islamabad">Islamabad</option>
                        <option value="Karachi">Karachi</option>
                        <option value="Peshawar">Peshawar</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="prov"><b>Province :</b></label>
                    <select name="user-prov" id="prov" class="form-control">
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                        <option value="Balochistan">Balochistanhi</option>
                        <option value="Khyber">Khyber</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip"><b>ZipCode :</b></label>
                    <input type="text" class="form-control" id="zip" placeholder="ZipCode" name="user-zipcode">             
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</body>
</html>