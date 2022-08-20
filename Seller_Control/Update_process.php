<?php

$Cookie_name="Seller";
$Cookie_value="Romona";
setcookie($Cookie_name,$Cookie_value,time() - 3600, "/");

if(!isset($_COOKIE[$Cookie_name]))
{
    echo "Cookie Named " . $Cookie_name . "is not set !";
}
else{
    echo "Cookie " . $Cookie_name . "is set";
    echo "Hi " . $_COOKIE[$Cookie_name];
}





?>