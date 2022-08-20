<?php

$validatename="";
$validatename1="";
$validateemail="";
$validateradio="";
$validationpass="";
$validationnum="";
$validateage="";
$validatecheckbox="";
$validateusername="";
$name=$name1=$age=$email=$number=$gender=$checkbox="";


if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST["fname"];
    $name1=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["pass"];
    $number=$_REQUEST["num"];
    $age=$_REQUEST["age"];
    
    

if(empty($_REQUEST["fname"]) || (strlen($_REQUEST["fname"])<3))
{
    $validatename= "*you must enter first name";

}
else
{
    $validatename="First Name : " .$name;
}

$name=$_REQUEST["lname"];
if(empty($_REQUEST["lname"]) || (strlen($_REQUEST["lname"])<3))
{
    $validatename1= "*you must enter last name";

}
else
{
    $validatename1="Last Name : " .$name1;
}

$email=$_REQUEST["email"];
if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
    $validateemail="*you must enter email";
}
else 
{
    $validateemail= "your email is ".$email;
}

$password=$_REQUEST["pass"];
if((strlen($_REQUEST["pass"])<8))
{
    $validationpass= "*your password must be 8 characters";

}

$number=$_REQUEST["num"];
if((strlen($_REQUEST["num"])<11))
{
    $validationnum= "*your Phone number must contain 11 numbers";
}
else
{
    $validationnum="Your Phone Number : " .$number;
}

if(isset($_REQUEST["myGender"]))
{
    $validateradio= $_REQUEST["myGender"];
}
else
{
    $validateradio= "*please select at least one radio";
}
if(empty($_REQUEST["age"]) || (strlen($_REQUEST["age"])<3))
{
    $validateage= "*you must enter your age";

}
else
{
    $validatename="Age : " .$age;
}
if(empty($_REQUEST["username"]) || (strlen($_REQUEST["username"])<3))
{
    $validateusername= "*you must enter an username";

}
else
{
    $validatename="User Name : " .$username;
}

//Get form data
$formdata = array(
    'First Name'=> $_POST["fname"],
    'Last Name'=> $_POST["lname"],
    'Age'=> $_POST["age"],
    'Email'=>$_POST["email"],
    'Phone(optional)'=> $_POST["num"],
    'Password'=> $_POST["pass"],
    'Checkbox'=>$validatecheckbox,
);
$existingdata = file_get_contents('../manager_data/managerdata.json');
$tempJSONdata = json_decode($existingdata);
$tempJSONdata[] =$formdata;
//Convert updated array to JSON
$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
 if(file_put_contents("../manager_data/managerdata.json", $jsondata)) {
     //write json data into data.json file
      echo "Registration data stored <br>";
        
  }
  
 else 
    {echo "Not registered";}

    
      

     // header("location:../manager_view/loginview.php");

//$data = file_get_contents("managerdata.json");
//$mydata = json_decode($jsondata);



}
?>