<?php
header( "refresh:8;url=index.php" );
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

	$email_to = "tcealumni1957@gmail.com";
        $email_subject = "Reg:Requesting database access";
	$email_message = " ";

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
  $hi_edu=$_POST["HIGHER_EDU"]
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
$query = "INSERT INTO temporary VALUES ('','".$regno."','".$name."','".$email."','".$pw1."','".$mobile."','".$degree."','".$branch."','".$batch."','".$location."','".$designation."','".$domain."','".$hi_edu."');";
  }
