<?php
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
	header('Location: signin.php');
}
$conn = mysqli_connect('localhost','root','mysql');
mysqli_select_db($conn,"alumni");


if(isset($_POST["submit1"]))
{
    if($_FILES['namelist']['name'])
	{
		$filename = explode(".",$_FILES['namelist']['name']);
		if(end($filename)== "csv")
		{
       		$handle = fopen($_FILES['namelist']['tmp_name'],"r");
            while($data = fgetcsv($handle))
			{
                 
                $SNO = mysqli_real_escape_string($conn,$data[0]);
				$REGNO = mysqli_real_escape_string($conn,$data[1]);
				$NAME = mysqli_real_escape_string($conn,$data[2]);
                $EMAIL = mysqli_real_escape_string($conn,$data[3]);
				$PASSWORD = mysqli_real_escape_string($conn,$data[4]);
				$MOBILE = mysqli_real_escape_string($conn,$data[5]);
				$DEGREE = mysqli_real_escape_string($conn,$data[6]);
				$BRANCH = mysqli_real_escape_string($conn,$data[7]);
				$YOJ = mysqli_real_escape_string($conn,$data[8]);
				$LOCATION = mysqli_real_escape_string($conn,$data[9]);
				$DESIGNATION = mysqli_real_escape_string($conn,$data[10]);
                $DOMAIN = mysqli_real_escape_string($conn,$data[11]);
                $HIGHER_EDU = mysqli_real_escape_string($conn,$data[12]);


			    $sql="INSERT INTO db1 values('$REGNO','$NAME','$EMAIL','$PASSWORD','$MOBILE','$DEGREE','$BRANCH','$YOJ','$LOCATION','$DESIGNATION','$DOMAIN','$HIGHER_EDU')"; 

				$result = mysqli_query($conn,$sql);				
		    } 
			fclose($handle);
			header("location: importing.php?insertion=1");
		}
        else
		{		
	   echo '<script type = "text/javascript">';
	   echo 'alert("Please select only csv file");'; 
	   echo 'window.location.href="importexcel.php";';
	   echo '</script>';
        }

	}
	else
		{
		   echo '<script type = "text/javascript">';
	   echo 'alert("Please select any file");'; 
	   echo 'window.location.href="importexcel.php";';
	   echo '</script>';
		}
}
if(isset($_GET["insertion"]))
{
	 echo '<script type = "text/javascript">';
	   echo 'alert("Inserted Successfully");'; 
	   echo 'window.location.href="adminhome.php";';
	   echo '</script>';
	
}
?>
