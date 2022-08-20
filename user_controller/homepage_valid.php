<?php

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


if(empty($customer_name)  || is_numeric($customer_name))
{
    $invalid_customer_name="Enter customers Name";
}
else
{
    $valid_customer_name= $customer_name;
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


}
?>