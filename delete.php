<?php include 'connect.php';
 $sql = "DELETE FROM details WHERE email = 'anianila555@gmail.com'";
 
 if ($conn->query($sql) == TRUE)
 {
  echo "RECORD DELETED";
  }
  else
   {
    echo "error :" . $conn->error;
	}
	
	$conn->close();
?>