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

$csv_file = "delhi.csv";
	if (($getfile = fopen($csv_file, "r")) !== FALSE) 
	{ 
		 $data = fgetcsv($getfile, 1000, ",");
         $num = count($data); 
         for ($c=0; $c < $num; $c++)
        {
            $result1 = $data; 
        }
		echo $result1[0].$result1[1];
	}
	mysqli_close($con);
?>
</body>
</html>
