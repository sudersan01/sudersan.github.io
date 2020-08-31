<?php 
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
  header('Location: home2.php');
}
else
{
  header( "refresh:8;url=index.php" );
}
?><!DOCTYPE html>
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
  <title>Visit Form</title>
  <!-- <link rel="stylesheet" type="text/css" href="db1.css"> -->
  <!-- <link href="layout.css" rel="stylesheet" type="text/css" />
        <link href="menu.css" rel="stylesheet" type="text/css" /> -->
</head>

<body bgcolor="#ffe6d0" class="body">
<br><br><br><br><br><br><br><br>
<div class="fix">
<div class=div1><br><center><h1 style="margin: 0 auto;">ALUMNI VISIT FORM</h1></center></div>
<br>
</div>
</body>
</html>

<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "tcealumni1957@gmail.com";
    $email_subject = "Reg:Alumini Visit";
 
 function died($error) {
        // your error code can go here
        echo "<p>We are very sorry, but there were error(s) found with the form you submitted.</p> ";
        echo "<p>These errors appear below.<br /><br /></p>";
        echo "<p id=err>".$error."</p><br /><br />";
        echo "<p>Please go back and fix these errors.</p><br /><br />";
        die();
    }
   
   
    // validation expected data exists
    if(empty($_POST['name']) ||
        empty($_POST['email']) ||
        empty($_POST['batch']) ||
        empty($_POST['dep']) ||
        empty($_POST['mob']) ||
        empty($_POST['up']) ||
        empty($_POST['dat']) ||
        empty($_POST['description'])) {
        
        died('*Please fill out the required feilds.');    
    }
 
     
 
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $batch = $_POST['batch']; // required
    $dep = $_POST['dep']; // not required
    $mob = $_POST['mob'];
    $dat = $_POST['dat'];
    $up = $_POST['up'];
    $he = $_POST['he'];
    $emp = $_POST['emp'];
     $fow = $_POST['fow'];
      $in = $_POST['in'];
    $others = $_POST['others'];
     $inp1 = $_POST['text1'];
      $inp2 = $_POST['text2'];
    $comments = $_POST['description']; // required
    $spez="-";
    $spez.=$_POST['spez'];


 
   $error_message = "";
    $email_exp = "/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/";
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= '*The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= '*The First Name you entered does not appear to be valid.<br />';
    

  }

   if(!is_numeric($mob)) {
    $error_message .= '*The Mobile number should contain only numbers.<br />';
    

  }
  if(!is_numeric($batch)) {
    $error_message .= '*Not a valid batch.<br />';
    

  }
 
  
  if(strlen($comments) < 2) {
   $error_message .= '*The Purpose you entered do not appear to be valid.<br />';
  
    
  }

 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
  $comp1="Others";
 if(strlen($spez) ==1) {
    $spez="";
  }
  if(strcmp($he,$comp1)==0) {
    $he=$others;
  }

 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "GENERAL INFO:\n\n\nFirst Name: ".clean_string($first_name)."\n";
    
    $email_message .= "Batch: ".clean_string($batch)."\n";
    $email_message .= "Department: ".clean_string($dep)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Mobile Number: ".clean_string($mob)."\n";
    $email_message .= "Date of Visit: ".clean_string($dat)."\n";
    $email_message .= "Purpose of visit: ".clean_string($comments)."\n\n\nEDUCATION:\n\n";
    $email_message .= "Did ".clean_string($up)."".clean_string($spez)." at TCE\n";
    $email_message .= "Got ".clean_string($he)." degree at ".clean_string($in)."\n\n\nWORK:\n\n";
    $email_message .= "Employment: ".clean_string($emp)."\n";
    $email_message .= "Field of Work: ".clean_string($fow)."\n";
    $email_message .= "Present/Past Employment details: \n1. ".clean_string($inp1)."\n2. ".clean_string($inp2);
 
// create email headers
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=iso-8859-1' . "\r\n";
$headers .= 'From:  ' . $first_name . ' <' . $email_from .'>' . " \r\n" .
            'Reply-To: '.  $email_from . "\r\n" .
            'X-Mailer: PHP/' . phpversion();





//sending mail 






if(mail($email_to, $email_subject, $email_message, $headers))  
{
  echo "<center>
      <p id=disp>Thank you for contacting us. We will be in touch with you very soon.<br><br>
      Please wait while you are redirected.....</p><br><br>
      <img src=gif.gif alt=Smiley face height=250 width=250>
      <br><br><br><br><br>
      </center>";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 # Init the MySQL Connection
  if( !( $db = mysql_connect( 'localhost' , 'root' , '' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysql_select_db( 'alumni' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

  $sql = "INSERT INTO visit values
  ('".$first_name."','".$email_from."','".$batch."','".$dep."','".$mob."','".$dat."','".$comments."')";

if (mysql_query($sql) === TRUE) {
          
  } else {
        echo "error";
  }

}
}
else
{
  echo "error1";
}
$email_to =$email_from;
$email_from2="tcealumni1957@gmail.com";
$email_subject = "Reg:Alumini Visit";
$body= "Respected Ma'am/sir,\r\n\r\n";
$body.= "Received your request for visiting our college.Eagerly waiting for your visit.\r\n\r\nFor more details contact:\r\n\r\nAlumni interaction cell @ TCE\r\nAlumni Officer :Mrs.N.Sreekala\r\nThiagarajar College Of Engineering,Madurai-625015\r\nTelephone: +91 452 2482240,41,42 Extn.:836\r\nCell No: 98435 56111\r\nFax: +91 452 2483427\r\nEmail: alumni@tce.edu,nsatce@tce.edu";


$headers = 'MIME-Version: 1.0' . "<br>";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "<br>";
$headers .= 'From:  ' . "TCE Alumni" . ' <' . $email_from2 .'>' . "<br>" .
            'Reply-To: '.  $email_from2 . "<br>" .
            'X-Mailer: PHP/' . phpversion();

if(mail($email_to, $email_subject, $body, $headers))  
{
  
}

}