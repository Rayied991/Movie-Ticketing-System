<?php include ("../user_controller/login_validation.php");
include("../Admin_control/notice.php");
       
if(!(isset($_SESSION)))
{
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User panel</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <fieldset> 
                <h1 align="center">Movie ticketing System</h1>
            </fieldset>
        </fieldset>
        <br><br>
        <fieldset>
            <legend><b><h2>User login panel</h2></b></legend>
            <br>
            <label for="user_name">User Name : </label>
            <input type="text" name="user_name" placeholder="Name" >
            
            <?php echo $invalid_username; ?>
            <br><br>
            <label for="pass">Password : </label>
            <input type="password" name="password" placeholder="Password">
            <?php echo $invalid_password; ?>
            <br><br>
            
            <input type="submit" name="submit" value="Login">
            <br><br>
            <big><a href="pass_reset.php">Forgot password?</a></big>
             
            <br>
           <p>New here? <big><a href="user_reg.php">Register</a></p></big>

        </fieldset>
    </form>
    <br><br>
    <fieldset>
      <legend><h2>Officials login</h2></legend>
      <marquee behavior="" direction="left"><h2><mark>This field is only for the officials </mark></h2></marquee>
      <h3>Login as -</h3>
      <button><a href="../Admin_View/Admin_Login.php">Admin</a></button><br><br>
      <button><a href="../manager_view/loginview.php">Manager</a></button><br><br>
      <button><a href="../Seller_View/Seller_Login.php">Seller</a></button>
    </fieldset>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="web_project";
       $tablename="noticedb";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT * FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    echo "<table border='2'>";
    echo "<tr><th>Notice</th><th>Date</th></tr>";
    while($row=$result->fetch_assoc()){
      echo "<tr><td><marquee>".$row["Notice"]."</td><td>".$row["Date"]."</marquee></td></tr>";
    }
    echo "</table>";
   
   
}  
else{
    echo "No record founds";

}

    ?>
</body>
</html>