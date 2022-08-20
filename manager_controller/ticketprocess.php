<?php

session_start ();
if (isset($_SESSION['username']))
{
   echo "Your session is running <br>" .$_SESSION['username'];
   echo "<br>";


}
$cookie_name="us";
$cookie_value="Dear Elite Customer";
setcookie($cookie_name, $cookie_value,time() + 86400, "/");

if(isset($_COOKIE[$cookie_name])) {
    echo "Welcome again <br>"; 
  }
  else {  
    echo "<br/>Welcome to this page for the 1st time " . $cookie_name;  
}  

$invalid_customer_name="";
$valid_customer_name="";

$invalid_hall="";
$valid_hall="";

// $hall = $_POST["hall"];
$invalid_clock ="";
$valid_clock="";


if($_SERVER["REQUEST_METHOD"] =="POST")
{
$customer_name = $_POST["Customers_nam"];
// $hall = $_POST["hall"];
// $clock = $_POST["clock"];
// $movie =$_POST["movie"];

$comment = $_POST["comment"];

if(empty($customer_name)  || is_numeric($customer_name))
{
    $invalid_customer_name="Enter customers Name";
}
else
{
    $valid_customer_name= $customer_name;
    //$validfname = $Seller_fname;
    echo "Customers Name : " . $customer_name;
}
echo"<br>";

echo"Ticket No : ";
echo(rand(100,300));
echo"<br>";


if(isset($_POST["movie"]))
{
    echo"Movie Name : " . $_POST["movie"];
    echo"<br>";
}
else
{
    echo"Please select a Movie<br>";
}

$_POST["clock"] = isset($_POST['clock']) ? "Movie Time : " . $_POST["clock"] : "Select Movie Time";
echo $_POST["clock"];

echo"<br>";

if(isset($_POST["hall"]))
{
    // echo 'A radio button was selected.<br>';
    // $valid_hall= $hall;

    if ($_POST['hall']=== 'Hall X') {

        echo 'Hall Name : X<br>';
  
      }
      else if ($_POST['hall']=== 'Hall Z') {

        echo 'Hall Name : Y<br>';
  
      }
}
else
{
$invalid_hall= "<br>select radio a Button.";
}

echo"Seat No : ";
echo(rand(1,30));
echo"<br>";







echo"<br>";
//echo "Your Comment : " . $comment;



}
?>