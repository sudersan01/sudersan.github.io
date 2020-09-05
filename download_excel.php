<html>
<body>

<?php 
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
	header('Location: signin.php');
}
      
if(isset($_POST["exportexcel"]))
{
	$conn = mysqli_connect('localhost','root','mysql');
mysqli_select_db($conn,"alumni");
$output='<table><tr>	 
     <th>SNO</th>
	 <th>REGNO</th>
	 <th>NAME</th>
	 <th>EMAIL</th>
	 <th>MOBILE</th>
	 <th>DEGREE</th>
	 <th>BRANCH</th>
	 <th>YOJ</th>
	 <th>LOCATION</th>
	 <th>DESIGNATION</th>
	 <th>DOMAIN</th>
	 <th>HIGHER_EDU</th>
</tr>';
    $sql = "select * from db1";
	$result = mysqli_query($conn,$sql);	
	
	while($row = mysqli_fetch_array($result))
	  {
		   $output.= '<tr>
		  <td>'.$row['SNO'].'</td>
		    <td>'.$row['REGNO'].'</td>
		   <td>'.$row['NAME'].'</td>
			   <td>'.$row['EMAIL'].'</td>
	    <td>'.$row['MOBILE'].'</td>
	    <td>'.$row['DEGREE'].'</td>
	    <td>'.$row['BRANCH'].'</td>
		<td>'.$row['YOJ'].'</td>
        <td>'.$row['LOCATION'].'</td>
		<td>'.$row['DESIGNATION'].'</td>
		<td>'.$row['DOMAIN'].'</td>
		<td>'.$row['HIGHER_EDU'].'</td>		
		</tr>';
 	  }
    $output.='</table>';
	header("Content-Type:application/xls");
	header("Content-Disposition:attachment;filename=alumnidetails.xls");
	echo $output;
}


?>
</table>
</body>
</html>