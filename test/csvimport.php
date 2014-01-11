<?php 

$con=mysqli_connect("localhost","root","umang","csvtest");

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: \n" . mysqli_connect_error();
  //close connection if errors
  mysqli_close($con);
  }
  else
  {
    echo "no errors\n";
  }

$csv_file = "testcsv.csv";

if (($getfile = fopen($csv_file, "r")) !== FALSE) { 
        $data = fgetcsv($getfile, 1000, ",");
        while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE) {
         $num = count($data); 
         for ($c=0; $c < $num; $c++)
            {
                $result = $data; 
                $str = implode(",", $result); 
                $slice = explode(",", $str);
                $col1 = $slice[0]; 
                $col2 = $slice[1];
                $col3 = $slice[2];
                $col4 = $slice[3];
                
            }
        
        // SQL Query to insert data into DataBase
        $sql = "INSERT INTO test(A,B,C,D) VALUES($col1 , $col2 , $col3 , $col4);";
        if(mysqli_query($con,$sql)){echo "successfully ran $sql \n";}else{echo "failed in running $sql\n";}
            
        } 
    }

echo "File data successfully imported to database!!"; 
mysqli_close($con); 
?>