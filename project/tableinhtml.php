<html>
    
<body>
<?php
$con=mysqli_connect("localhost","root","umang","test");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$result = mysqli_query($con,"SELECT * FROM data");
$csv_file = "delhicol.csv";
	if (($getfile = fopen($csv_file, "r")) !== FALSE) 
	{ 
		 $slice = fgetcsv($getfile, 1000, ",");
         $num = count($slice);       
	}	
	echo "<table border='1'>";
	echo "<tr>";
	
	for($c=0; $c < $num; $c++)
	{
		echo "<th>".$slice[$c]."</th>" ;
	}
	echo "</tr>";
	while($row = mysqli_fetch_array($result))
	{	
		echo "<tr>";
		for($c=0; $c < $num; $c++)
		{
			echo "<td>".$row[$slice[$c]]."</td>";	
		}
		echo "</tr>";
	} 
	echo "</table>";
mysqli_close($con);
?>
</body>
</html>
