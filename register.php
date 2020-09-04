<?php
header( "refresh:8;url=index.php" );
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
  header('Location: signin.php');
}

session_start();
$con = mysqli_connect('localhost','root','mysql');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

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
  
  <!-- <link rel="stylesheet" type="text/css" href="db1.css"> -->
  <!-- <link href="layout.css" rel="stylesheet" type="text/css" />
        <link href="menu.css" rel="stylesheet" type="text/css" /> -->



</head>


<body bgcolor="#ffe6d0" class="body">
<br><br><br><br><br><br><br><br>
<div class="fix">
<div class=div1><br><center><h1 style="margin: 0 auto;">ALUMNI REGISTRATION FORM</h1></center></div>
<br>
</div>


<?php

	require "vendor/autoload.php";

$robo = 'alumnitesting01@gmail.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  $insti = " ";
	$hispec = " ";
	$workinfo =" ";
	$domain = " ";
	$email = " ";
	$pw1 = " ";
	$pw2 = " ";
	$specialization = " ";
	$emp = " ";
	$designation = " ";
	$will = " ";
	$regno = " ";
	//$hispec = " ";

  $name=$_POST["NAME"];
  $regno=$_POST["REGNO"];
  $batch=$_POST["BATCH"];
  $branch=$_POST["BRANCH"];
  $degree=$_POST["DEGREE"];
  $hi_edu=$_POST["HIGHER_EDU"];
  $email=$_POST["EMAIL"];
  //$specialization=$_POST["specialization"];
  //$emp=$_POST["emp"];
  $designation=$_POST["DESIGNATION"];
  $location=$_POST["LOCATION"];
  $domain=$_POST["DOMAIN"];
  //$deg=$_POST["degree"];
  $pw1=$_POST["pw1"];
  $mobile=$_POST["MOBILE"];
  $pw2=$_POST["pw2"];
  
  //$will=$_POST["willingness"];
  if(($pw1==$pw2 ) == FALSE)
    {
      echo "<script> alert('Passwords do not match');
      window.location.href('signup.php')";
    }
  else
  {

mysqli_select_db($con,'alumni');
$query = "INSERT INTO temporary VALUES ('".$regno."','".$name."','".$email."','".$pw1."','".$mobile."','".$degree."','".$branch."','".$batch."','".$location."','".$designation."','".$domain."','".$hi_edu."');";
$result=mysqli_query($con,$query);
if($result = mysqli_query($con, $query)) {
    $success = "Successful!";
  } 
  else {
    $failure = "Unable to INSERT into DB: " . mysqli_error($con);
    echo $failure;
  }
header("Location: index.php");

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
    $mailer->addAddress('drgamutha@gmail.com', 'Sudersan'); // (receiver email address, receiver name)

    $mailer->isHTML(true);
    $mailer->Subject = 'Reg:Requesting database access';
    $mailer->Body = $name.' has send to a request to be made a member of the alunmni circle of Thiagarajar College of Engineering.';

    $mailer->send();
    $mailer->ClearAllRecipients();

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}


  }
  ?>
