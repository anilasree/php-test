<?php include 'connect.php';
  $sql = "SELECT * FROM details";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0)
  {
	  echo "<h1>Database</h1>";
	  echo "<table>";
	  echo "<tr>";
	  echo "<th>Name</th>";
	  echo "<th>phone</th>";
	  echo "<th>email</th>";
	  echo "</tr>";
	  while($row = $result->fetch_assoc())
	  {
		echo "<tr>";
        echo "<td>";
        echo $row["name"];
        
        echo "<td>";
        echo $row["phone"];
        
        echo "<td>";
        echo $row["email"];
        echo "</td>";
		
	  }
	  echo "</table>";
  }
 else 
 {
  echo "No results";
 }
 
 $sql1 = "SELECT * FROM details WHERE name = 'Abhi' ";
 $res1 = $conn->query($sql1);
 
 
   if ($res1->num_rows > 0)
  {
	  
	  
		   echo "<h1>Database</h1>";
	  echo "<table>";
	  echo "<tr>";
	  echo "<th>Name</th>";
	  echo "<th>phone</th>";
	  echo "<th>email</th>";
	  echo "</tr>";
	  while($row = $res1->fetch_assoc())
	  {
		echo "<tr>";
        echo "<td>";
        echo $row["name"];
        
        echo "<td>";
        echo $row["phone"];
        
        echo "<td>";
        echo $row["email"];
        echo "</td>";
		
	  }
	  echo "</table>";
	  }
  
  
$conn->close(); 
  ?>
