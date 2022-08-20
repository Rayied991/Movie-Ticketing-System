<?php 
include ("../manager_controller/reg.php");
 ?>


<html>
    <body>

        <h1 align = "center">Movie Ticket Booking System</h1>
        <h2 align = "center"> ..Welcome..</h2>

        <h3>Manager Registration Form</h3>
        <h4>Your Personal Information</h4>
        <form action="" method="post" enctype = "multipart/form-data"  >
            <table>

            <tr>
            <td>First Name :</td>
            <td><input type="name" name="fname"><?php echo $validatename; ?></td>
            </tr>
            <tr>
            <td>Last Name :</td>
            <td><input type="name" name="lname"><?php echo $validatename1; ?></td>
            </tr>
            <tr>
            <td>Age :</td>
            <td><input type="age" name="age"> <?php echo $validateage; ?></td>
            </tr>
            <tr>
            <td>Gender :</td>
            <td>
            Male <input type="radio" name="myGender">
            Female <input type="radio" name="myGender">
            Other <input type="radio" name="myGender">
            <?php echo $validateradio; ?>
            </td> 
            </tr>
            <tr>
            <td>Email :</td>
            <td><input type="email" name="email"> <?php echo $validateemail; ?></td>
            </tr>
            <td>Phone(optinal):</td>
            <td><input type="tel" name="num"><?php echo $validationnum; ?></td>
            </tr>

            <tr>
            <td>User Name :</td>
            <td><input type="User Name" name="Username"><?php echo $validateusername; ?></td>
            </tr>
            
            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass"><?php echo $validationpass; ?></td>
            </tr>

            <td>Confirm Password :</td>
            <td><input type="Confirm password" name="pass"><?php echo $validationpass; ?></td>
            </tr>

            <tr>
            <td>
            <input type="reset" value="Reset"> 
            <input type="submit" value="Submit">
            </td>
            </tr>


</table>
<h5>Already have an account?<a href="loginview.php">Sign in</a></h5>
            



    </body>
    </html>