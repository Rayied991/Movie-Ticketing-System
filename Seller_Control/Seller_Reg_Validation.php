<?php

$invalidfname="";
$invalidlname="";

$valid_gender="";
$invalidgender ="";

$invalid_address="";
$invalid_email="";
// $invalid_mobile="";

$invalid_Sellername="";
$invalid_Sellerpass="";
$invalid_ConSellerpass="";
//valid
$validfname="";
$validlname="";


$valid_address="";
$valid_email="";
// $valid_mobile ="";

$valid_Sellername="";
$valid_Sellerpass="";
$valid_ConSellerpass="";


$x=0;
if(isset($_POST['submit']))
{
if($_SERVER["REQUEST_METHOD"] =="POST")
{
    $Seller_fname = $_POST["fname"];
    $Seller_lname = $_POST["lname"];
    // $Gender = $_POST["gender"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $Seller_name =$_POST["Seller_name"];
    $Seller_pass =$_POST["Seller_pass"];
    $Seller_ConSellerpass =$_POST["Confirm_seller_pass"];

    if(empty($Seller_fname)  || is_numeric($Seller_fname))
{
    $invalidfname="**Enter your First Name";
}
else
{
    $validfname = $Seller_fname;
    $x++;
   
    // echo "First Name : " . $Seller_fname;

}
echo"<br>";
if(empty($Seller_lname) || is_numeric($Seller_lname))
{
    $invalidlname="**Enter your Last Name";

}
else{
    $validlname=$Seller_lname;
    $x++;
    
    // echo "Last Name : " . $Seller_lname;
}
echo"<br>";

if(isset($_POST["gender"]))
{
    
    $valid_gender= $_POST["gender"];
    
   
}
else
{
    
    $invalidgender = "**Please select a Gender";
}
echo"<br>";

if(empty($address))
{
    $invalid_address="**Enter your Address";
}
else
{
    $valid_address = $address;
    $x++;
  

}
echo"<br>";
if(empty($email))
{
    $invalid_email="**Enter your Valid email";
}
else
{
    $valid_email = $email;
    $x++;

}
echo"<br>";

if(empty($Seller_name) || is_numeric($Seller_name))
{
    $invalid_Sellername="**Please Enter your Name";
}
else{
   $valid_Sellername = $Seller_name;

   $x++;
}
if(empty($Seller_pass))
    {
        $invalid_Sellerpass="**Please Enter your Password";
    }
    else if (!empty($Seller_pass) && (strlen($Seller_pass) < 8))
    {
        $invalid_Sellerpass = "**Please enter password more than 8 characters";
    }
    else
    {
        $valid_Sellerpass = $Seller_pass;
        // echo"**Password Entered";
        $x++;
    }

    if ($Seller_pass == $Seller_ConSellerpass) {
        // success!
        $valid_ConSellerpass= $Seller_ConSellerpass;
        // echo "**Password Matched";
        $x++;
     }
     else {
        // failed :(
            $invalid_ConSellerpass="**Password not Matched Try Again";

     }
     if($x==7)
     {
     $formdata = array(
        'firstname' => $validfname,
        'lastname' => $validlname,
        'address' => $valid_address,
        'email' => $valid_email,
        'Seller_name' => $valid_Sellername,
        'Seller_pass' => $valid_Sellerpass,
     
    );
    $existingdata = file_get_contents("../DataSeller/DataSeller.json");
    $tempJSONdata = json_decode($existingdata);
    $tempJSONdata[] =$formdata;
    //Convert updated array to JSON
    $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
    
    //write json data into data.json file
    if(file_put_contents("../DataSeller/DataSeller.json", $jsondata)) {
         echo "Registration has been Successful <br>";
         header("location:../Seller_View/Seller_Login.php");
     }
    else {
         echo "Not Registered";
    }
}
     
//   $data = file_get_contents("../DataSeller/DataSeller.json");
//   $mydata = json_decode($data);

//   echo "my value: ".$mydata[1]->lastname;
 

    

}


}
?>