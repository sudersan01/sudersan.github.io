<?php
session_start();
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
	require "vendor/autoload.php";

$robo = 'alumnitesting01@gmail.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$email = $_POST["username"];
$_SESSION["user"] = "$email";
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

mysqli_select_db($conn1,'alumni');
if(isset($_POST["forgotpw"]))
	{
		echo "<script> alert('Mail has been send to your email for password reset'); </script>";
			header("Location: signin.php");

$developmentMode = true;
$mailer = new PHPMailer($developmentMode);

try {
    $mailer->SMTPDebug = 2;
    $mailer->isSMTP();

    if ($developmentMode) {
    $mailer->SMTPOptions = [
        'ssl'=> [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        ]
    ];
    }


    $mailer->Host = 'smtp.gmail.com';
    $mailer->SMTPAuth = true;
    $mailer->Username = 'alumnitesting01@gmail.com';
    $mailer->Password = 'alumnitce@2k20';
    $mailer->SMTPSecure = 'tls';
    $mailer->Port = 587;

    $mailer->setFrom('alumnitesting01@gmail.com', 'TCE Alumni');
    // for testing please use your  own email; on application use tcealumni1957@gmail.com
    $mailer->addAddress($email, $name); // (receiver email address, receiver name)

    $mailer->isHTML(true);
    $mailer->Subject = 'Reg:PASSWORD RESET';
    $mailer->Body = $name." You're receiving this e-mail because you requested a password reset for your user account at www.tce.edu.\r\n
Please go to the following page and choose a new password:
http://172.17.18.250/alumni/resetpw.php?user='$emaill1'/\r\n
If you didn’t request this change, please ignore this email. No changes will be made to your account.\r\n\r\n
Regards,\r\n
TCE Alumni cell";

    $mailer->send();
    $mailer->ClearAllRecipients();

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}



}


else
{


$query = "SELECT PASSWORD FROM db1 where EMAIL= '".$user."'";
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
			echo "<script> alert('Login successful'); </script>";
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
}
?>

		

	
	


</body>

</html>