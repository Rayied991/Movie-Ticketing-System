<?php
include("Seller_Reg_Validation.php");

$invalid_sellername="";
$invalid_sellerpass="";

 $valid_sellername="";
 $valid_sellerpass="";
 session_start();

$_SESSION['seller_name'] = 'Dear Seller';
 

 
 
 
    if(isset($_REQUEST['submit']))
    {
     
     $sellername = $_REQUEST["seller_name"];
     $sellerpassword= $_REQUEST["seller_pass"];

    if(empty($sellername))
    {
        $invalid_sellername="Please Enter your Name";
    }
    else{
        $valid_sellername = $sellername;
    //    echo "Name : " . $seller_name;
    //    echo"<br>";

    }
    
    if(empty($sellerpassword))
    {
        $invalid_sellerpass="Please Enter your Password";
    }
    else if (!empty($sellerpassword) && strlen($sellerpassword) >= 6)
    {
        header("location:../Seller_View/Seller.php");
     $valid_sellerpass=$sellerpassword;
    }
    else
    {
        $invalid_sellerpass="Password Invalid";
    }



     //login using json
     $login_data=file_get_contents("../DataSeller/DataSeller.json");
     $fetch_login_data=json_decode($login_data);
   
     foreach($fetch_login_data as $log_data)
    {
         if($log_data=="Seller_name" && $value==$valid_sellername)
         {
             if($log_data=="Seller_pass" && $value==$valid_sellerpass)
             {
                 echo"Login success";
                 //header("location:../Seller_View/Seller.php");
             }
             else
             {
                 echo"LOgin failed";
             }
         }
         
         
         
     }
    }
 

?>