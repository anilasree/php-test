<?php include 'connect.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
{
 die("connection failed: " . mysqli_connect_error());
}
else
 echo "connected";
 
 $sql = "INSERT INTO details (name,phone,email)
 VALUES ('ANILA', '123456789', 'anianila555@gmail.com');";
 $sql .= "INSERT INTO details (name,phone,email)
 VALUES ('Abhi', '123987789', 'aniabhi555@gmail.com');";
 $sql .= "INSERT INTO details (name,phone,email)
 VALUES ('ram', '123456456', 'aniram555@gmail.com');";
 
 if (mysqli_multi_query($conn, $sql))
  {
   echo "INSERTED SUCCESSFULLY";
   }
   else
    {
	  echo "error:" . $sql . "<br>" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
	?>