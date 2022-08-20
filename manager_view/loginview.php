<?php 
include ("../manager_controller/login.php");
 ?>

<html>
    <body>

        <h1 align = "center">Movie Ticket Booking System</h1>
        <h2 align = "center"> ..Welcome..</h2>

        <h3>Manager login Form</h3>
        
        <form action="" method="post" enctype = "multipart/form-data"  >
            <table>
            <tr>
            <td>User Name :</td>
            <td><input type="User Name" name="username"> <?php echo $validateusername; ?></td>
            </tr>
            
            
            <tr>
            <td>Password :</td>
            <td><input type="password" name="pass"><?php echo $validationpass; ?></td>
            </tr>
            <tr>
            <td>
            <input type="reset" value="Reset"> 
            <input type="submit" value="Submit">
            </td>
            </tr>

</table> 
<h4>Forgotten your password?<a href="forgotpassview.php">Reset Password</a></h4>


</body>
</html>
