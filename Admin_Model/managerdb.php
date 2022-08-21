<?php
class managerdb{
    function opencon(){
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="web_project";
        //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
    echo "error connecting database";
}
return $conn;
    }
 function insertmanager($fname,$lname,$age,$gender,$num,$email,$man_name,$password,$con_password,$table,$conn){
        
        $sqlstr="INSERT into $table(fname,lname,age,gender,num,email,username,password,confirm_password) VALUES ('$fname','$lname','$age','$gender','$num','$email','$man_name','$password','$con_password')";
        if($conn->query($sqlstr)){
           
            echo "Inserted";
        }
        else{
            echo "cannot insert Because of the error =".$conn->error;//error debug using this property
        }
            }
        }