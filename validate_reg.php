<?php
header( "refresh:8;url=index.php" );
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
	$hispec = " ";

	$username="root";
	$password="";
	$database="alumni";
	$server="localhost";
$conn = mysqli_connect($server, $username, $password, $database);





	if(isset($_POST['submit']))
	{
		if(empty($_POST["name"])||empty($_POST["regno"])||empty($_POST["batch"])||empty($_POST["branch"])||empty($_POST["email"])||empty($_POST["degree"])||empty($_POST["mobile"])||empty($_POST["pw1"])||empty($_POST["pw2"])||empty($_POST["workinfo"])||empty($_POST["domain"])||empty($_POST["emp"])||empty($_POST["designation"]))
		{
			
			echo "<script>
			alert('All the form fields are mandatory !! Please fill the form and submit it again.');
			window.location.href='signup.php';
			</script>";
			
		}

		else
		{

			$name=$_POST["name"];
	$regno=$_POST["regno"];
	$batch=$_POST["batch"];
	$branch=$_POST["branch"];
	$email=$_POST["email"];
	$specialization=$_POST["specialization"];
	$emp=$_POST["emp"];
	$designation=$_POST["designation"];
	$deg=$_POST["degree"];
	$pw1=$_POST["pw1"];
	$mobile=$_POST["mobile"];
	$pw2=$_POST["pw2"];
	$will=$_POST["willingness"];




$num = 1;
 
if($_POST['workinfo']=="Others")
{

	$workinfo = $_POST['other'];
}

else
{
	$workinfo = $_POST['workinfo'];
}

if($_POST['domain']=="Others")
{

	$domain = $_POST['other1'];
}

else
{
	$domain = $_POST['domain'];
}

if($_POST['hiedu']=="Masters")
{

	$insti = $_POST['instituition'];
	$hispec = $_POST['hiedu'];
}

else if($_POST['hiedu']=="Doctoral")
{
	
	$insti = $_POST['instituition'];
	$hispec = $_POST['hiedu'];
}
else if($_POST['hiedu']=="Others")
{
	
	$insti = $_POST['instituition'];
	$hispec = $_POST['spec'];
}
else
{
	$insti = " ";
	$hispec = " ";
}





			if($pw1==$pw2 )
		{

			if(preg_match("/^[0-9]{10,11}+$/",$_POST['mobile']))
			{

				$username="root";
	$password="";
	$database="alumni";
	$server="localhost";

	$selectSQL = "SELECT NAME,YOJ,BRANCH FROM db1 where REGNO ='".$regno."'";
	$verify = "SELECT PASSWORD FROM verification where REGNO ='".$regno."'";




//check if user is already present
//$connverify = mysqli_connect($server, $username, $password, $database);
//mysqli_select_db($connverify,'verification');
//$verifyRes = mysqli_query($connverify, $verify ) ;
//$rowverify = mysqli_fetch_array($verifyRes,MYSQL_ASSOC);
//if( !($verifyRes ) ){
    //echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  //}
//$connverify->close();

//$conn = mysqli_connect($server, $username, $password, $database);

mysqli_select_db($conn,'verification');
$verifyRes = mysqli_query($conn, $verify ) ;
$rowverify = mysqli_fetch_array($verifyRes,MYSQL_ASSOC);
if( !($rowverify ) )
{


//usual works


mysqli_select_db($conn,'db1');
$selectRes = mysqli_query($conn, $selectSQL ) ;
$row = mysqli_fetch_array($selectRes, MYSQL_ASSOC);
if( !($selectRes ) )
{
    //echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
  	
	$count=0;
	$na = $row['NAME'];

	$namegn = strtolower($name);
	$namedb = strtolower($na);
	similar_text($namegn,$namedb,$percent_match);
	$sim = 69;

	if(($batch==$row['YOJ']) && ($branch==$row['BRANCH'] )&& ($percent_match>$sim) )
	{
		$count=1;
		//echo "hello";
	}

	if($count==0)
	{
		//echo "NO RECORD FOUND";
		//echo "$name , $regno  ,   $branch   ,   $batch ";
                       
	
			

			// mail to be sent


function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 


$email_message .= "GENERAL INFO:\n\n\nName: ".clean_string($name)."\n";
    $email_message .= "Register Number: ".clean_string($regno)."\n";
    $email_message .= "Batch: ".clean_string($batch)."\n";
    $email_message .= "Department: ".clean_string($branch)."\n";
    
$email_message .= "Degree at TCE: ".clean_string($deg)."\n";
$email_message .= "Higher education: ".clean_string($hispec)."\n";
$email_message .= "Specialization: ".clean_string($_POST["specialization"])."\n";
$email_message .= "Domain: ".clean_string($domain)."\n";
$email_message .= "Employer: ".clean_string($emp)."\n";
$email_message .= "Designation: ".clean_string($designation)."\n";
$email_message .= "Wilingness: ".clean_string($will)."\n";
$email_message .= "Work Info: ".clean_string($workinfo)."\n";
 $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Mobile Number: ".clean_string($mobile)."\n";



$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ' . $name . ' <' . $_POST["email"] .'>' . " \r\n" .
            'Reply-To: '. $_POST["email"] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();



if(mail($email_to, $email_subject, $email_message, $headers))  
{
  echo "<center>
      <p id=disp>Thank you for contacting us. We will be intimating you within 72 hours <br><br>
      Please wait while you are redirected.....</p><br><br>
      <img src=gif.gif alt=Smiley face height=250 width=250>
      <br><br><br><br><br>
      </center>";

}
else
{
  echo "error";
}



			echo "<script>
			//alert('Validation in progress... You will be intimated within 72 hours ... ');			
			
			</script>";


	}

else{

//$sqlver = "INSERT INTO verification values(' ','".$name."','".$email."','".$_POST["mobile"]."','".$deg."','".$branch."','".$specialization."','".$batch."','".$emp."','".$designation."','".$pw1."',' ',' ".$workinfo."' ,' ".$domain."','".$will."','".$regno."','".$hispec."','".$insti."')";


$sqlver="insert into verification values('$name','$email','$mobile','$deg','$branch','$specialization','$batch','$emp','$designation','pw1','$workinfo','$domain','$will','$regno','$hispec','$insti')";



$sql2 = "UPDATE db1 SET DOMAIN = '".$domain."' , MOBILE = '".$_POST["mobile"]."' , SPECZ = '".$hispec."' , EMPLOYER = '".$emp."' ,DESIGNATION = '".$designation."'  ,WORK_INFO = '".$workinfo."',Instituition = '".$insti."',Higher_edu = '".$_POST['hiedu']."' , WILLINGNESS = '".$will."' , Higher_edu = '".$hispec."' where REGNO = '".$regno."'";

//$sql3 = "INSERT INTO db1 values('".$num."','".$regno."','".$fname."','".$lname."','".$name."','".$email."','".$pw1."','".$_POST["mobile"]."','".$deg."','".$branch."','".$specialization."','".$batch."',' ','".$emp."','".$location."','".$designation."','".$workinfo."',' ".$domain."','".$will."','".$hispec."','".$insti."','','','','','','')";


//$sql2 = "UPDATE DATA SET EMAIL='".$email."' , MOBILE ='".$_POST["mobile"]."' , COMPANY ='".$emp."' , DESIGNATION = '".$designation."' , WORK_INFO = '".$workinfo."' , DOMAIN = '".$domain."' , WILLINGNESS = '".$will."' WHERE REGNO = '".$regno."'";


	if(!$conn)
	{
		echo "fatal error";
	}



	mysqli_select_db($conn,'verification');
			mysqli_query($conn,$sqlver) ;
			
			 
			
	mysqli_select_db($conn,'db1');
			mysqli_query($conn,$sql2) ;
			echo "<script>
			window.location.href='demo.php';
			</script>" ;




}
}

$conn->close();

}
			

			else
			{
				$conn = mysqli_connect($server, $username, $password, $database);

//$sql2 = "UPDATE db1 SET EMAIL = '".$email."' , PASSWORD='".$pw1."' , MOBILE ='".$_POST["mobile"]."' , SPECIALIZATION = '".$specialization."' , EMPLOYER = '".$emp."' , DESIGNATION = '".$designation."' ,WORK_INFO = '".$workinfo."' ,DOMAIN = '".$domain."' , WILLINGNESS = '".$will."' , Higher_edu = '".$hispec."' WHERE REGNO = '".$regno."'";

$sql2 = "UPDATE db1 SET DOMAIN = '".$domain."' , MOBILE = '".$_POST["mobile"]."' , SPECZ = '".$hispec."' , EMPLOYER = '".$emp."' ,DESIGNATION = '".$designation."'  ,WORK_INFO = '".$workinfo."',Instituition = '".$insti."',Higher_edu = '".$_POST['hiedu']."' , WILLINGNESS = '".$will."' , Higher_edu = '".$hispec."' where REGNO = '".$regno."'";

				mysqli_select_db($conn,'db1');
				//mysqli_query($conn,$sql2) ;
				if(mysqli_query($conn,$sql2)) 
				{
					
				}
				else
				{
					
				}



				echo "<script>
			alert('You already have an account ... Login to explore more ...');
			</script>";
			$conn->close();

			
			}


  }

else
{

	echo "<script>
			alert('mobile number must be of 10 digits . In case of landline number 11 digits have to be entered ... Enter the appropriate values');
			window.location.href='signup.php';
			</script>";
}

		}

		else
		{
			echo '<script>alert("Password mismatch")</script>';	
		}

		}
	}


	
?>
<footer><center><img src="hel.png"></center> </footer>
</body>

</html>