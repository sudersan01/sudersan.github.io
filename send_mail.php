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
<form method="post" action="" name="reset"><br /><br />
<label><strong>Enter Your Email Address:</strong></label><br /><br />
<input type="email" name="email" placeholder="username@email.com" />
<br /><br />
<input type="submit" value="Reset Password"/>
</form>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<?php } ?>