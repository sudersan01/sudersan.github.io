<?php
session_start();
if(!isset($_SESSION["user"])){
	header('Location: signin.php');
}
$conn1 = mysqli_connect('localhost','root','mysql');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
 <! DOCTYPE HTML>
<html>

<head>
<style type="text/css">
	.modal {
    display:block; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: black;
    margin: auto;
    padding: 20px;
    height: 400px;
    width: 400px;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
</style>
</head>

<body>

 

<?php

$email1 = $_POST["username"];
$_SESSION["user"] = "$email1";
// $username="root";
// 	$password="";
// 	$database="alumni";
// 	$server="localhost";

// $conn1 = mysqli_connect($server, $username, $password, $database);

// $check = "SELECT PASSWORD from VERIFICATION where EMAIL='".$email1."'";

// 	if(!$conn1)
// 	{
// 		//die("Connection error :" . $conn1->connect_error);
// 		echo "fatal error";
// 	}

//      $result=mysqli_query($conn1,$check);
// 	 $row = mysqli_fetch_array($result);
// 	 $ans= $check;

$user = $_POST["username"];
$pass = $_POST["password"];
$rowcount = 0;

mysqli_select_db($conn1,'alumni');
// $query = "SELECT PASSWORD FROM verification where EMAIL='".$user."'";
$query = "SELECT PASSWORD FROM verification where EMAIL= '".$user."'";
// $result = mysqli_query($conn1,$query);
$result = mysqli_query($conn1,$query);

$followingdata = $result->fetch_assoc();
// $password = $result['PASSWORD'];

//echo "'".$followingdata."'";

	 
	$adminemail="tcealumni1957@gmail.com";

	if (($pass==$followingdata['PASSWORD']) == TRUE) 
	{
    			//echo "U have logged in successfully";
			// 	echo "<script>
			// window.location.href='home1.php';
			// alert('You have logged in successfully');
			// </script>";

	
		if($user==$adminemail)
		{
			//echo "Success";
			header("Location: adminhome.php");
		}
		else
		{
			echo "<script>alert('Login successful'); </script>";
			header("Location: home1.php");
		}
	}
	else
	{
		echo "<script>
			alert('Incorrect password ');
			window.location.href='signin.php';
		</script>";
		
		

	}
	//else
	//{
	//	echo "<script>
	//		alert('Both the form fields are mandatory ');
	//		window.location.href='signin.php';
	//		</script>";
	//}



	// else {
 //    		//echo ("Error:". mysqli_error($conn1)) ;
	// 	//echo ("Incorrect Username or password");
	// 	echo "<script>
	// 		alert('Incorrect username or password');
	// 		window.location.href='signin.php';
			
	// 		</script>";
	// }

$conn1->close();

		

	
	
if(isset($_POST["forgotpw"]))
	{
		
		if(empty($_POST["user"]))
		{
			echo "<script>
			prompt('Enter yur email id in username field to reset password');
			window.location.href='signin.php';
			</script>";
		}
		
		else
		{
			?>
 	<div id="myModal" class="modal">

  <div class="modal-content">
  <br>
    <span class="close">&times;</span>
    <br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="tce.png" height="200px" width="300px">
    <p id="user" style="font-family: Times; font-weight: bolder;font-size: 200%;color: white " ></p>
  </div>

</div>
<script>
    document.getElementById("user").innerHTML="Mail has been sent to your username for password reset";
 </script>;
 <?php
			//ADD MAIL to redirect user to resetpw.php page with the entered password as value of resetpw.php's field (email1) i.e username
 $email1 = $user;
$email1 = $_POST["username"];
$emaill1=base64_encode($emaill);
$email_to =$emaill;
$email_subject = "Reg:PASSWORD RESET";
$email_from="tcealumni1957@gmail.com";

$body= "You're receiving this e-mail because you requested a password reset for your user account at www.tce.edu.\r\n
Please go to the following page and choose a new password:
http://172.17.18.250/alumni/resetpw.php?user='$emaill1'/\r\n
If you didn’t request this change, please ignore this email. No changes will be made to your account.\r\n\r\n
Regards,\r\n
TCE Alumni cell";

$headers = 'MIME-Version: 1.0' . "<br>";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "<br>";
$headers .= 'From:  ' . "TCE Alumni" . ' <' . $email_from .'>' . "<br>" .
            'Reply-To: '.  $email_from . "<br>" .
            'X-Mailer: PHP/' . phpversion();

if(mail($email_to, $email_subject, $body, $headers))  
{
  
}
		}
	

		
	}

 ?>

</body>

</html>
