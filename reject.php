<?php
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
	header('Location: signin.php');
}
$conn1 = mysqli_connect('localhost','root','mysql');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

mysqli_select_db($conn1,"alumni");
// $query = "SELECT * FROM temp";
// $result = mysqli_query($con,$query);

$id = $_GET['id'];
$ab="SELECT name FROM temporary WHERE email='".$id."';";
$result=mysqli_query($conn1,$ab);
$name=mysqli_fetch_array($result)['name'];

?>
<!DOCTYPE html>
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
		<?php


		$query2 = "DELETE FROM temporary WHERE EMAIL='".$id."'";

		if($conn1->query($query2) === TRUE)
		{
			echo "<script> alert('Request rejected !!');</script>";
			header('Location:verify.php');
		}
		else
		{
			echo "Error: " .$query2. "<br>" .$conn1->error;
		}

		?>

		<?php

			require "vendor/autoload.php";

		$robo = 'alumnitesting01@gmail.com';

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

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
    $mailer->addAddress($id, $name); // (receiver email address, receiver name)

    $mailer->isHTML(true);
    $mailer->Subject = 'Reg:Database access denied';
    $mailer->Body = 'Sorry '.$name.' your request to join the Alumni circle of Thiagarajar College of Engineering has been rejected. For further details contact tcealumni1957@gmail.com';

    $mailer->send();
    $mailer->ClearAllRecipients();

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}


  
				
				?>

	</table>
	<br>

</section>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>