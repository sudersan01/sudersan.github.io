<?php

$con = mysqli_connect("localhost","root","mysql","alumni");
    if (mysqli_connect_errno()){
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   die();
   }
   require "vendor/autoload.php";

$robo = 'alumnitesting01@gmail.com';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

date_default_timezone_set('Asia/Kolkata');
$error="";
if(isset($_POST["email"]) && (!empty($_POST["email"]))){
$email = $_POST["email"];
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$email = filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email) {
   $error .="<p>Invalid email address please type a valid email address!</p>";
   }else{
   $sel_query = "SELECT * FROM `db1` WHERE email='".$email."'";
   $results = mysqli_query($con,$sel_query);
   $row = mysqli_num_rows($results);
   if ($row==""){
   $error .= "<p>No user is registered with this email address!</p>";
   }
  }
   if($error!=""){
   echo "<div class='error'>".$error."</div>
   <br /><a href='javascript:history.go(-1)'>Go Back</a>";
   }else{
   $expFormat = mktime(
   date("H"), date("i"), date("s"), date("m") ,date("d")+1, date("Y")
   );
   $expDate = date("Y-m-d H:i:s",$expFormat);
   $key = md5(2418*2);
   $addKey = substr(md5(uniqid(rand(),1)),3,10);
   $key = $key . $addKey;
// Insert Temp Table
mysqli_query($con,"INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES ('".$email."', '".$key."', '".$expDate."');");
$name=mysqli_query($con,"SELECT name FROM db1 WHERE email='".$email."';");
$name=mysqli_fetch_array($name)['name'];
 
$output='<p>Dear ' .$name. ',</p>';
$output.='<p>Please click on the following link to reset your password.</p>';
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p><a href="http://localhost/Alumni%20Website_modification/reset_password.php?
key='.$key.'&email='.$email.'&action=reset" target="_blank">
http://localhost/Alumni%20Website_modification/reset-password.php
?key='.$key.'&email='.$email.'&action=reset</a></p>'; 
$output.='<p>-------------------------------------------------------------</p>';
$output.='<p>Please be sure to copy the entire link into your browser.
The link will expire after a day for security reasons.</p>';
$output.='<p>If you did not request this forgotten password email, no action 
is needed, your password will not be reset.</p>';   
$output.='<p>Thanks,</p>';
$output.='<p>Admin, Thiagarajar College of Engineering</p>';
$body = $output; 
 
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
    $mailer->addAddress($email,$name); // (receiver email address, receiver name)

    $mailer->isHTML(true);
    $mailer->Subject = 'Reg:PASSWORD RESET';
    $mailer->Body = $body;

    $mailer->send();
    $mailer->ClearAllRecipients();

} catch (Exception $e) {
    echo "EMAIL SENDING FAILED. INFO: " . $mailer->ErrorInfo;
}


 }
   }
else{
?>

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
body
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
.mydiv
{
  border: 1px darkslategray solid;
  box-shadow: 0 4px 8px 0 darkslategray, 0 6px 20px 0 darkslategray;
  padding: 20px;
  margin-top:50px;
  background-color: white;
  margin-right: 200px;
  margin-left:200px;
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
<div class="mydiv">
<form method="post" action="" name="reset"><br /><br />
  <div class="form-group">
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input class = "form-control" type="email" name="email" placeholder="username@email.com" />
</div>
<br /><br />
<div class="form-group">
  <button  class="btn btn-success btn-block" type="submit" value="Reset Password" class="button btn-lg btn-block"style="font-weight:600;font-size:100%;">Reset Password &nbsp;&nbsp;<span class="glyphicon glyphicon-refresh"></span></span>
    </button>
<!-- <input type="submit" value="Reset Password"/> -->
</div>
</form>
</div>

<!--<form method="post" action="" name="reset"><br /><br /> ///Do not remove this!!! for reference purposes..
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" value="Reset Password"/>
</form>-->
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>