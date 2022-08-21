

<html>
    <title>User Informations</title>
    <body>
        <h1>User Informations</h1>
        <form action="" method="POST">
        <table border="2">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Gender</th>
                <th>Mobile No</th>
                <th> Email</th>
                <th>Address</th>
                <th>Source</th>
            </tr>
            <?php
   $servername="localhost";
   $username="root";
   $password="";
   $dbname="web_project";
   $tablename="reg";
   //create connection
         $conn=new mysqli($servername,$username,$password,$dbname);

//connection check
             if($conn->connect_error){
             echo "error connecting database";
             }

             $sql="SELECT fname,lname,gender,mob,email,address FROM $tablename ";
             $result=$conn->query($sql);
             if($result->num_rows>0){
                while($row=$result->fetch_assoc()){
                  echo "<tr><td>".$row["fname"]."
                  </td><td>".$row["lname"]."
                  </td><td>".$row["gender"]."
                  </td><td>".$row["mob"]."</td><td>"
                  .$row["email"]."</td><td>"
                  .$row["address"]."
                  </td><td><a href='AboutUser.php'>Delete</a></td></tr>";
                }
                echo "</table>";
               
               
            }  
            else{
                echo "No record founds";
            
            }

            ?>
        </table>
        </form>
        <h4>Go To <a href="Admin_Homepage.php">Home Page</a></h4>
    </body>

</html>
