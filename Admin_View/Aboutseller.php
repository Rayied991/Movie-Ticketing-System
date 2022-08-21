
<html>
    <title>Seller Info</title>
    <head>
        <!-- <link rel="stylesheet" href="../Admin_CSS/.css"> -->
    </head>
    <body>
    <h1>Seller Informations</h1>
        <form action="" method="POST">
      
   <table border="2">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
        <th>Seller Name</th>
        <th>Source</th>
    </tr>
    <?php
       $servername="localhost";
       $username="root";
       $password="";
       $dbname="web_project";
       $tablename="seller_reg";
       //create connection
$conn=new mysqli($servername,$username,$password,$dbname);

//connection check
if($conn->connect_error){
   echo "error connecting database";
}

$sql="SELECT Seller_fname,Seller_lname,Gender,address,email,Seller_name FROM $tablename ";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<tr><td>".$row["Seller_fname"]."
      </td><td>".$row["Seller_lname"]."
      </td><td>".$row["Gender"]."
      </td><td>".$row["address"]."
      </td><td>".$row["email"]."
      </td><td>".$row["Seller_name"]."
      </td><td><a href='Aboutseller.php'>Delete</a></td></tr>";
    }
    echo "</table>";
   
   
}  
else{
    echo "No record founds";

}

    ?>



    
   
   
   </table>
   <a href="../Admin_View/Sellerupdate.php">Add Seller</a>

   <a href="../Admin_View/Admin_Homepage.php">Go Back</a>
    
        
    </body>
    </form>
</html>