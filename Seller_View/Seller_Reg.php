<?php
include("../Seller_Control/Seller_Reg_Validation.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Registration</title>
</head>
<body>
    <form action="" method="POST" >
    <h1 align="center">Seller Registration</h1>
    <fieldset>
<legend>Enter the Personal Information</legend>
First Name : 
<input type="text" name="fname" placeholder="Seller First Name">

<?php
echo $invalidfname;
?>
<br><br>
Last Name :
<input type="text" name="lname" placeholder="Seller Last Name">

<?php
echo $invalidlname;
?>
<br><br>
Gender :
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Other">Other
<?php
echo "<br>" . $invalidgender;
?>
<br><br>

Address :
<input type="" name = "address" placeholder="Present address">
<?php
echo $invalid_address;
?>

<br><br>
Email :
        <input type="email" name="email" placeholder="Email">
        <?php
echo $invalid_email;
?>
        <br><br>
       
    </fieldset>
 
       
        

        
    </fieldset>
    <fieldset>
        <legend>Mandatory Items</legend>
        Seller Name : 
        <input type="text" name="Seller_name" value="">
        <?php
echo  $invalid_Sellername;
        ?>
        <br><br>
        Password : 
        <input type="password" name="Seller_pass" placeholder="Seller Password">
        <?php
echo  $invalid_Sellerpass;
        ?>
        <br><br>
        Confirm Password : 
        <input type="password" name="Confirm_seller_pass" placeholder="Confirm Seller Pass"> 
        <input type="reset" value="Reset"> 
        <input type="submit" name="submit" value="Register">
        <?php
echo   $invalid_ConSellerpass;
        ?>
        
        <br><br>

    </fieldset>
<a href="Seller_Login.php">Login page</a>
    </form>
</body>
</html>