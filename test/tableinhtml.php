<html>
    
<body>
<?php
$con=mysqli_connect("localhost","root","umang","csvtest");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM test");

echo "<table border='1'>
<tr>
<th>A</th>
<th>B</th>
<th>C</th>
<th>D</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['A'] . "</td>";
  echo "<td>" . $row['B'] . "</td>";
  echo "<td>" . $row['B'] . "</td>";
  echo "<td>" . $row['B'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>
</html>