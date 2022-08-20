<?php

$Cookie_name="Seller";
$Cookie_value="Seller! You can update in here!";
setcookie($Cookie_name,$Cookie_value,time() + 86400, "/");

if(!isset($_COOKIE[$Cookie_name]))
{
    echo "Cookie Named " . $Cookie_name . " is not set !";
}
else{
    echo "Cookie " . $Cookie_name . " is set! <br>";
    echo "Hi " . $_COOKIE[$Cookie_name];
}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seller Update Delete</title>
</head>
<body>
    <h1>
        Seller Work-Space :
    </h1>
    <fieldset>
        <img src="../images/person.jpg" alt="Person" width="200" height="200"> 

    <h2>Update Movie Name : </h2>
    <input type="text" name="Movie Name">
    <br>
    <h2>Update Movie Picture :</h2>
    <input type="file" name="File" id="">
    <br>
    <h2>Delete a Movie : </h2>
    <input type="text" name="Delete Movie">
    <br>
    <h2>Change Timing : : </h2>
    <input type="text" name="ChangeTime">
<br><br>
    <a href="Seller.php">Back to HomePage</a>
    </fieldset>
</body>
</html>