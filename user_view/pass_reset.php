<?php 
include("../user_controller/ret_pass.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        <fieldset>
            <fieldset> 
                <h1 align="center">Movie ticketing System</h1>
            </fieldset>
        </fieldset>

        <fieldset>
            <legend align="center"><h2>Change password</h2></legend>
            <label for="pass_user_name">Email : </label>
            <input type="text" name="pass_user_name" placeholder="Enter valid email">
            <?php echo $invalid_email; ?>
            <br><br>
            <label for="pass_newpass">New password : </label>
            <input type="password" name="pass_new_pass" placeholder="Password">
            <?php echo $invalid_newpass; ?>
            <br><br>
            <label for="pass_confirm_pass">Confirm password : </label>
            <input type="password" name="pass_confirm" placeholder="Confirm password">
            <?php echo $invalid_confirm; ?>
            <br><br>

            <button name="save">Save new password</button>

        </fieldset>
        <br>
        <big><p><a href="user_login.php">Login page</a></p></big>

    </form>
</body>
</html>