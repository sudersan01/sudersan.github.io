
<html>
<head>
<style>

#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:#C0392B;
  color: white;
}
	.button{
background-color: purple;
border:none;
color: white;
padding: 10px 20px 15px 20px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:20px;
margin: 4x 4px;
cursor:pointer;
border-radius: 12px;
}
.heading
	{
		background:#0C2459;
		//background:#a93226;
		height:85;
		width:95%;
		margin:auto;
	}
.heading h1
{
	color:white;
	text-align:center;
	padding:25;
	word-spacing:20;
}

</style>
</head>
<body class="body" >
<br><br><br><br><br><br><br>
<div class="heading">
	<h1>ALUMNI DATABASE<h1> 
</div>
<br><br><br>
<br><br><br>

<a href="adminhome.php" class="button">Back</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<form  method='POST' action="download_excel.php" style="float:right;">
<input type='submit' name='exportexcel' class="button" value='Download'>
</form>

<br>
<br>
<table border=1 cellpadding=1 cellspacing=1 id='customers'>
<tr>
	 
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

</tr>

   <?php
     $conn = mysqli_connect('localhost','root','');
     mysqli_select_db($conn,"alumni");
	  
	  $sql = "SELECT * FROM db3";
	  $result = mysqli_query($conn,$sql);
	  
	  while($row = mysqli_fetch_array($result))
	  {
	      echo "<tr>";
		  echo  "<td>".$row['SNO']."</td>";
		  echo  "<td>".$row['REGNO']."</td>";
		  echo  "<td>".$row['NAME']."</td>";
			echo    "<td>".$row['EMAIL']."</td>";
		echo "<td>".$row['PASSWORD']."</td>";
	    echo "<td>".$row['MOBILE']."</td>";
		echo "<td>".$row['DEGREE']."</td>";
		echo "<td>".$row['BRANCH']."</td>";
		echo "<td>".$row['YOJ']."</td>";
		echo "<td>".$row['LOCATION']."</td>";
		echo "<td>".$row['DESIGNATION']."</td>";
		echo "<td>".$row['DOMAIN']."</td>";
		echo "<td>".$row['HIGHER_EDU']."</td>";
	  }
   ?>

</table>



</body>
</html>
	