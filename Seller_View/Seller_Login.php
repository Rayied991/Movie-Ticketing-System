<?php
include("../Seller_Control/Seller_Login_Valid.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login For Seller</title>
</head>
<body>
    <!-- <h1>Seller Login Form</h1> -->
    <form action="" method="POST">
        <fieldset>
        <h1 align="center">Seller Login Form</h1>
        </fieldset>
        
           <fieldset>
            <legend>Login Details---</legend>
               
                 Name : 
                <input type="text" name="seller_name" placeholder="Full Name">
                <?php
                echo $invalid_sellername;
                ?>
                 <br><br>
                 
                Password :
                <input type="password" name="seller_pass" placeholder="Password">
                <?php
                echo $invalid_sellerpass;
                ?>
                 <br><br>
                 <a href="Seller.php">
               <input type="button" name="submit" value="submit"> 
                  </a>
                  <br><br>
              
               <!-- <a href="Seller_forgot_pass.php">Forgot Password?</a> -->


               <a href="Seller_Reg.php">Wanna Register?
</a>
              
               </fieldset>
 <fieldset>
    <legend>Information</legend>
    <h3>
        Contact Manager at <a href="https://www.google.com/gmail/about/">rubaba@gmail.com</a>  <br><br>
        
        Contact Admin  at <a href="https://www.google.com/gmail/about/">Hassain@gmail.com</a> 
        
    </h3>
</fieldset>
    
</body>
</html>