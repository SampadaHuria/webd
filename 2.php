<!DOCTYPE html>
<html lang="en">
<head>
<title>Insert this page</title>
</head>
<body>
    <center>
        <?php
        $username="root";
        $servername="localhost";
        $password="";
        $database="my_database";

        $conn=mysqli_connect($servername,$username,$password,$database);
        if($conn==false){
        die("ERROR:Couldn't connect".mysqli_connect_error());
        }

        $firstname=$_REQUEST["fname"];
        $lastname=$_REQUEST["lname"];
        $email=$_REQUEST["email"];
        $password=$_REQUEST["password"];

        $sql="INSERT INTO hello values('$firstname','$lastname','$email','$password')";

        if(mysqli_query($conn,$sql)){
            echo "<h3>Data stored in a database successfully.</h3>";
        }
        else{
            echo "ERROR: Hush! Sorry $sql.".mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
</center>
    
</body>
</html>