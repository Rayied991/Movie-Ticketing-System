<?php

if(!isset($_SESSION))
{
    session_start();
}

$invalid_username="";
$invalid_password="";
$valid_username="";
$valid_password="";

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_REQUEST['submit']))
        {
            $username=$_REQUEST["user_name"];
            $password=$_REQUEST["password"];
    
            if(empty($username))
            {
                $invalid_username= "*you must enter username";
            }
            else
            {
               $valid_username=$username;
            }
            if(empty($password))
            {
                $invalid_password= "*you must enter password";
            }
            
            else if(!empty($password) && strlen($password)<8)
            {
                $invalid_password= "*your password must be 8 characters";
            }
            else
            {
                $valid_password=$password;
            }
           
        }

        //login using json
        $login_data=file_get_contents("../user_data/reg_user_data.json");
        $fetch_login_data=json_decode($login_data);

        foreach($fetch_login_data as $login_data)
        {
            if($login_data->set_user==$valid_username && $login_data->set_pass==$valid_password)
            {
                $_SESSION["user_name"]=$valid_username;
                $_SESSION["password"]=$valid_password;
                header("location:../user_view/homepage.php");
            }
            else
            {
                if(empty($username))
                {
                    $invalid_username= "*you must enter username";
                }
               else
               {
                $invalid_username= "*Invalid username or password";
               }
            }
        }
  

    }

      

?>