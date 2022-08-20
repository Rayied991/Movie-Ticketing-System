<?php
include ("reg.php");

$validateusername="";
$validationpass="";


$username=$pass=$checkbox="";
session_start();

$_SESSION['username'] = 'Dear Manager';


if($_SERVER["REQUEST_METHOD"]=="POST")
{

    $username=$_REQUEST["username"];
    $password=$_REQUEST["pass"];


    
    
$username=$_REQUEST["username"];
if(empty($_REQUEST["username"]) || (strlen($_REQUEST["username"])<3))
{
    $validateusername="*you must enter your username";
}
else 
{
    $validateusername= "your username is ".$username;
}
$password=$_REQUEST["pass"];
if((strlen($_REQUEST["pass"])<8))
{
    $validationpass= "*you must enter your password";

}

//login using json
$login_data=file_get_contents("../manager_data/managerdata.json");
$fetch_login_data=json_decode($login_data);

foreach($fetch_login_data as $login_data)
        {
            if($login_data->username==$validateusername && $login_data->password==$validatepassword )
            {
                header("location:../manager_view/homepageview.php");
            }
            else
            {
                if(empty($username))
                {
                    $validateusername= "*you must enter username";
                }
               else
               {
                $validateusername= "";
               }
            }
        }




}

























?>