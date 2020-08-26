
<?php
session_start();
if(!isset($_SESSION["user"])){
	header('Location: signin.php');
}
$con = mysqli_connect('localhost','root','mysql');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($con,'alumni');
$query = "SELECT * FROM temporary";
$result = mysqli_query($con,$query);
?>
<! DOCTYPE HTML>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
.body
		{
			background-image:url("bg.png");
			background-color :#f7f2d7;
			background-repeat:no-repeat;
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
.container {
    width: 92%;
    height: 1100px;
    background: white;
    margin: auto;
    padding: 20px;
}
.one {
    //width: 75%;
     //margin-right: 5%;
	height: 1100px;
   padding: 10px;
    float: left;
}
a {
	color: white;

}
.one p,li
{
	font-size :16.5;
	line-height :1.75;
	text-decoration: none;
	word-spacing:7.5;
}
#alu {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width:15%;
}

#alu td, #alu th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}
table{
	border-color: white;
}
.button3 {border-radius: 8px;}
.button {
    background-color: #0C2459; /* Green */
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-box-shadow: inset 1px 6px 12px lightgreen, inset -1px -10px 5px #0C2459, 1px 2px 1px black;
  -moz-box-shadow: inset 1px 6px 12px lightgreen, inset -1px -10px 5px #0C2459, 1px 2px 1px black;
  box-shadow: inset 1px 6px 12px powderblue, inset -1px -10px 5px #0C2459, 1px 2px 1px black;
   text-shadow: 1px 1px 1px black;
}

#alu tr{background-color:white;}

#alu tr:hover {background-color: #ddd;}



.side {
    //width: 300px;
  //border: 15px solid green;
  //padding: 50px;
  color: darkslategray;
  /*margin: 20px;*/
    }
.side li
{text-decoration:none;}
</style>
<script type="text/javascript">
	function f1()
	{
		document.getElementById('alu').style.display="block";
	}
	function f2()
	{
		document.getElementById('alu').style.display="none";
	}
	function myprompt()
	{
		window.alert("You have requested to delete the request !!");
	}
</script>
</head>

<BODY class="body" background="bg.png">
<br><br><br><br><br><br><br>
<div class="heading">
	<h1>ALUMNI DATABASE<h1> 
</div>
<br>
<div style="margin: 0 0 0 1000px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="tce.png" width="50px" height="50px" style="border-radius: 25px;vertical-align: middle;" onclick="fl()"><br><br>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION["user"] ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="insertpage.php">Insert</a></li>
      <li><a href="updatepage.php">Update</a></li>
      <li><a href="database1.php">Search</a></li>
      <li><a href="verify.php">Verify</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </div>
</div><span style="vertical-align: middle;font-weight: bold;text-overflow: ellipsis;">
	</div>
	<br>



<section class="container">
    <div class="one">
	<font color="#0C2459" >
		<h5> The updates are found here: </h5>

		<table align="center" style="border:3px solid; color: darkslategray; box-shadow: 2px solid; padding: 7000px;">
		<br>
		<br>
		
			<!-- <h2 style="color: white; text-align: center;">Stock at the ware-house</h2> -->

		
		<tr>
			<th colspan="1px" style="padding: 20px;">Name</th>
			<th colspan="2px" style="padding: 20px;">Email</th>
			<th colspan="2px" style="padding: 20px;">Mobile</th>
			<th colspan="2px" style="padding: 20px;">Degree</th>
			<th colspan="2px" style="padding: 20px;">Batch</th>
			<th colspan="2px" style="padding: 20px;">Department</th>
			<th colspan="5px" style="padding: 30px;">Verification</th>
		</tr>

		<?php
		while($rows=mysqli_fetch_assoc($result))
		{
		?> 
		

		<tr>
			<td  style="padding: 10px; font-weight: bold;"><em><?php echo $rows['NAME'];?></em>
			
			<td colspan="2px" style="padding: 20px;"><?php echo $rows['EMAIL'];?></td>
			<!-- <button class="btn btn-primary"><a href="accept.php" style="color: white">Accept</a>
			<button class="btn btn-danger"><a href="reject.php" style="color: white">Reject</a> -->
			<td colspan="2px" style="padding: 20px;"><?php echo $rows['MOBILE'];?></td>
			<!-- <button class="btn btn-primary"><a href="accept.php" style="color: white">Accept</a>
			<button class="btn btn-danger"><a href="reject.php" style="color: white">Reject</a> -->
			<td colspan="2px"style="padding: 20px;"><?php echo $rows['DEGREE'];?></td>
			<!-- <button class="btn btn-primary"><a href="accept.php" style="color: white">Accept</a>
			<button class="btn btn-danger"><a href="reject.php" style="color: white">Reject</a> -->
			<td colspan="2px" style="padding: 20px;"><?php echo $rows['YOJ'];?></td>
			<!-- <button class="btn btn-primary"><a href="accept.php" style="color: white">Accept</a>
			<button class="btn btn-danger"><a href="reject.php" style="color: white">Reject</a> -->
			<td colspan="2px" style="padding: 20px;"><?php echo $rows['BRANCH'];?></td>
			<!-- <button class="btn btn-primary"><a href="accept.php" style="color: white">Accept</a>
			<button class="btn btn-danger"><a href="reject.php" style="color: white">Reject</a> -->
			<td colspan="5px" style="padding: 5px;">
				
<!-- 			<form action="submit" method="post">
 -->			
 				<?php
 				echo "<button class='btn btn-primary'>";	
				echo "<a href='accept.php?id=".$rows['EMAIL']."'>Accept</a>";
				echo "</button>";
				echo "&nbsp&nbsp&nbsp&nbsp";	
				echo "<button class='btn btn-danger' onclick='myprompt()'>";	

				echo "<a href='reject.php?id=".$rows['EMAIL']."''>Reject</a>";
				echo "</button>";
				?>
			

 

			<!-- <button class="btn btn-danger"><a href="reject.php" style="color: white">Reject</a></button> -->
				
			</td>
			<!-- </form>	 -->
		</tr>
	<?php
		}
		?>


		
	</table>
	<br>

</section>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>