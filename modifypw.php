<?php
header( "refresh:8;url=signin.php" );
?>
<html>

<head>
 <style>
  .div1
{
  height: 80px;
  width: auto;
  background-color:#0C2459  ;
  color:white;
}
      .body
    {
      background-image:url("bg.png");
      background-color :#f7f2d7;
      background-repeat:no-repeat;
    }
    p
    {
      font-size: large;
      font-style: bold;
          }
    #err
    {
      font-style: italic;
      color: red;
    }
    #disp
    {
      font-style: italic;
    }

   </style>
</head>

<body bgcolor="#ffe6d0" class="body">
<br><br><br><br><br><br><br><br>
<div class="fix">
<div class=div1><br><center><h1 style="margin: 0 auto;">PASSWORD RESET SUCCESSFUL !</h1></center></div>
<br>
</div>
	<?php

		$server='localhost';
		$username='root';
		$password='';
		$database='alumni';	

		$uname = $_POST['email1'];
		$pw1 = $_POST['pw1'];
		$pw2 = $_POST['pw2'];

		if($pw1==$pw2)
		{
			$conn3 = mysqli_connect($server, $username, $password, $database);

			$query = "UPDATE verification set PASSWORD = '".$pw1."' WHERE EMAIL='".$uname."'";

			mysqli_query($conn3,$query);

			$conn3 -> close();

			

			echo "<center>
      			<br><br>
      			<img src=tick1.gif alt=Smiley face height=250 width=250>
     			 <br><br><br><br><br>
      </center>";
		}	

		else
		{
			echo "<script>
			alert('Password mismatch !!! please check the password and try again  ');
			window.location.href='resetpw.php';
			</script>";
		}

	

		
?>
<footer><center><img src="hel.png"></center> </footer>
</body>

</html>