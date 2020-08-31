<?php
ob_start();
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
	header('Location: signin.php');
}
$sql=new PDO('mysql:host=localhost;dbname=alumni','root','mysql');
$stm=$sql->prepare("select * from db1 where db1.email='".$_SESSION['user']."'");
            $stm->execute();
            $result1=$stm->fetchAll();

                  ?>
                  <?php foreach($result1 as $row)
                  { ?>

                  <?php } ?>
                  <!DOCTYPE HTML>
<!-- surya ended here-->
<HEAD>
<script>
function checkpass()
	{

	var pass1 = document.getElementById('pw1');
    var pass2 = document.getElementById('pw2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#abf2b0";
    var badColor = "#f4adad";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = "green";
        message.innerHTML = "Passwords Match!"
    }
    else
    {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = "red";
        message.innerHTML = "Passwords Do Not Match!"
    }
	}


	function checkmob()
	{
	var mob = document.getElementById('mobile');
    //Store the Confimation Message Object ...
    var message = document.getElementById('cnfrm');
    //Set the colors we will be using ...
    //Compare the values in the password field 
    //and the confirmation field
    if(((mob.length == 10)||(mob.length==11))){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        message.style.color = "green";
        message.innerHTML = "Correct Pattern"
    }
    else
    {
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        message.style.color = "red";
        message.innerHTML = "Incorrect contact pattern"
    }
	}

	


window.onload = function()
{
	document.getElementById("other").style.display = 'none';
	document.getElementById("otherdom").style.display = 'none';
	document.getElementById("pg").style.display = 'none';
	document.getElementById("hieduspec").style.display = 'none';
	document.getElementById("instituition").style.display = 'none';
	document.getElementById("otherwill").style.display = 'none';
	var msg = document.getElementById('confirmMsg');
	 msg.style.color = "red";
	msg.innerHTML = "* As per your degree marksheet ( IN CAPITAL LETTERS )" ;
	var msg11 = document.getElementById('confirmMsg2');
	 msg11.style.color = "red";
	msg11.innerHTML = "* Year of joining"
}


/*function checkPW()
{
	
}*/

function fun1()
{
	document.getElementById("other").style.display = 'block';
}
function fun2()
{
	document.getElementById("other").style.display = 'none';
}
function fun4()
{
	document.getElementById("otherdom").style.display = 'none';
}
function fun3()
{
	document.getElementById("otherdom").style.display = 'block';
}
function fun5()
{
	if(document.getElementById("PG").checked)
	{
	document.getElementById("pg").style.display = 'block';
	}
	else
	{
		document.getElementById("pg").style.display = 'none';
	}
}
function fun10()
{
	document.getElementById("instituition").style.display = 'block';
	document.getElementById("hieduspec").style.display = 'block';
}
function fun11()
{
	document.getElementById("instituition").style.display = 'block';
	document.getElementById("hieduspec").style.display = 'none';
}
function sel1()
{
	var opt1 = document.getElementById("hiedu").value;
	if(opt1 == "Masters" || opt1 == "Doctoral" )
	{
		fun11();
	}
	else if(opt1 == "Others" )
	{
		fun10();
	}
	else
	{
		document.getElementById("hieduspec").style.display = 'none';
		document.getElementById("instituition").style.display = 'none';
	}
}
function sel2()
{
	var opt2 = document.getElementById("workinfo").value;
	if(opt2 == "Others"  )
	{
		fun1();
	}
	else
	{
		fun2();
	}
}
function sel3()
{
	var opt2 = document.getElementById("domain").value;
	if(opt2 == "Others"  )
	{
		fun3();
	}
	else
	{
		fun4();
	}
}
function sel4()
{
	var opt3 = document.getElementById("willingness").value;
	if(opt3 == "Others"  )
	{
		document.getElementById("otherwill").style.display = 'block';
	}
	else
	{
		document.getElementById("otherwill").style.display = 'none';
	}
}
</script>
	<meta charset="utf-8">
    <meta name="description" content="Thiagarajar College of Engineering (TCE)">
<meta name="keywords" content="TCE, Engineering, College">
  <title>Alumni signup | Thiagarajar College of Engineering - (TCE)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-touch-fullscreen" content="YES">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
   
<link rel="stylesheet" type="text/css" href="css/styleindex.css">
<link rel="stylesheet" href="w3.css">
<!--<link rel="stylesheet" type="text/css" href="css/style11.css">-->
<link rel="stylesheet" href="css/blog.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<!-- java script -->

 <script src="css/script.js" type="text/javascript"></script>
 <script src="js1/jquery.min.js" type="text/javascript"></script>
	<!--<script src="js1/bootstrap.js"></script>
  <script src="js1/bootstrap.bundle.min.js"></script>-->
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/popper.min.js"></script>
  <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
   	</head>
	<style>
		 
		 
		fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    background: #fbfbfb;
	
}
legend {
   color: #678;
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:maroon;
    font-size: 112%;
}

	</style>
</HEAD>


<body>
  <div class="container">
       <header class="blog-header py-3">
     	<!--<div class="row">-->
		 <img class="img-fluid  mx-auto d-block" src="img/log22.png"  style="max-width: 100%; and height: auto;align;center;"> 
	<!-- </div>-->
	
  </header></div>
<!-- navbar --> <div class="container">

 <nav class="navbar navbar-expand-lg sticky-top ">  
 <a class="navbar-brand nav-link"  href="index.php">Home</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">  
 <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse " id="navbarSupportedContent">     <ul class="navbar-nav mr-4">
 <li class="nav-item">
     <a class="nav-link"   href="signup.php"><span>Register</span></a>       </li>  
<li class="nav-item">
    <a class="nav-link "  href="signin.php"><span> Login</span></a>    
 </li>
 <li class="nav-item"> 
    <a class="nav-link "  href="visit.php"><span>Visit the instituition</span></a>         </li>   
<li class="nav-item">  
   <a class="nav-link "   href="signin.php"><span> Search</span></a>       </li>  
<li class="nav-item"> <button type="button" class="btn" style="color: #830000; Font :Helvetica;font-size:16.8px; font-weight:700;  font-style: normal;
    font-variant: normal;text-transform: uppercase;padding: 3px 12px; height:40px; text-decoration:none;" data-toggle="modal" data-target="#myModal">
	UserManual</button> </li> 
 <!--<a class="nav-link "   href="User Manual-Alumni.pdf" style="text-decoration:none" target="_top">UserManual</a> --> 

 <!-- Trigger the modal with a button -->
       </ul> 
</div></nav>
	   
        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
					<h4 class="modal-title" style="color: #830000; Font :Helvetica;padding-right:75;font-size:16.8px; font-weight:700;text-transform: uppercase; ">UserManual</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                       
						
                    </div>
                    <div class="modal-body">

                        <embed src="pdf/User Manual-Alumni.pdf"
                               frameborder="0" width="100%" height="700px">

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
  
<br>
<br>
 
	 
	

<div class="container mt-2 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-md-6 ">

<!-- Surya edited here-->
<form method="POST">
<!-- Surya ended here-->
<div class="form-group">
<label for="">BRANCH <span class="req">* </span>  </label> <!--
<input class="form-control" type = "text" name="batch" placeholder = "Year of joining" value=""/>   
<span id="confirmMsg2" class="confirmMsg2"></span>-->
<select name="branch" class="form-control" >
		<option value=""><?php echo $row['BRANCH']; ?></option>
		<option value="Civil">Civil Engineering</option>
		<option value="CSE">Computer Science and Engineering</option>
		<option value="Electronics">Electronics and Communication Engineering</option>
		<option value="Electrical">Electrical and Electronics Engineering</option>
		<option value="EIE">Electronics and Instrumentation Engineering</option>
		<option value="IT">Information Technology</option>
		<option value="Mechanical">Mechanical Engineering  </option>
		<option value="Mechatronics">Mechatronics</option>
		<option value="Architecture">Architecture</option>
		<option value="AppScience">Applied Science</option>
	</select>
</div>	

<div class="form-group">
  <label for="">DEGREE (At TCE) <span class="req">* </span>  </label>
     	  <input  type="checkbox" name="degree" value="UG" id="UG" >Under Graduate</input>
					&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			<input type="checkbox" name="degree" value="PG" id="PG" onclick="fun5()">Post Graduate</input>
    </div>

    <div class="form-group">
		<div id="pg"><br>
		<label for="">SPECIALIZATION <span class="req">* </span>  </label>
				</b><input class="form-control" type = "text" name="specialization"  value = "" placeholder="Enter specialization for PG" ></input>
        </div></div>
        
        <div class="form-group">
		
		<label for="">HIGHER EDUCATION : </label>
	<select class="form-control" name="hiedu" id="hiedu" onchange="sel1()">
			<option value="none"  >---None---</option>
			<option value="Masters" id="Masters" onclick="fun11()" >Masters</option>
			<option value="Doctoral" id="Doctoral" onclick="fun11()">Doctoral</option>
			<option value="Others" id="other2" onclick="fun10()">Others</option>
    </select>
</div>

<div class="form-group">

		<div id="hieduspec">
		 
		<label for="">SPECIALIZATION <span class="req">* </span> </label>
		
			</b><input class="form-control" type = "text" name="spec"  value = "" placeholder="Enter specialization"></input>
		</div></div>
		
		<div class="form-group">

				<div id="instituition">
		
		<label for="">INSTITUITION <span class="req">* </span> </label>
		
			<input class="form-control" type = "text" name="instituition"  value = "" placeholder="Enter the instituition name" ></input>

        </div></div>
        
        <div class="form-group">

		<label>MOBILE NUMBER  <span class="req">* </span> </label> 
			<input class="form-control"  type="text" name="mobile" value="<?php echo $row['MOBILE']; ?>" id="mobile" placeholder ="Mobile number"></input>
					<span id="cnfrm" class="cnfrm"></span></div>
		<!--</div>-->
		 
				<div class="form-group">

		<label>EMAIL ID <span class="req">* </span> </label>
			<input class="form-control" type="email" name="email" value="<?php echo $row['EMAIL']; ?>" placeholder ="Email id"></input>
		</div>
        
        <h2 style="color:blue;font-weight:800;">Career Information</h2>
		 <br>
				<div class="form-group">

	 <label>WORK INFORMATION <span class="req">* </span></label>


		<select class="form-control" name="workinfo" id="workinfo" onchange="sel2()" >
		<option value="">---Select your option---</option>
		<option value="Corporate">Corporate</option>
		<option value="Government">Government</option>
		<option value="Entrepreneur">Entrepreneur</option>
		<option value="Retired">Retired</option>
		<option value="Others">Others</option>
		</select>
</div>
				<div class="form-group">

		<div id="other">
		 
		   <label>OTHER <span class="req">* </span></label> 
		   <input class="form-control" width="100%" type = "text" name="other" placeholder = "Specify your work information" value="" />
		</div></div>
		
		 
				<div class="form-group">

		 <label>DOMAIN <span class="req">* </span></label> 



		<select class="form-control" name="domain" id="domain" onchange="sel3()">
		<option value="">---Select your option---</option>
		<option value="Hardware">Hardware</option>
		<option value="Software">Software</option>
		<option value="Management">Management</option>
		<option value="Research and Development">Research and Development</option>
		<option value="Teaching">Teaching</option>
		<option value="Others">Others</option>
		</select>
</div>


		 
				<div class="form-group">

		<div id="otherdom">
		 <label>OTHER <span class="req">* </span></label> 
			<input class="form-control" type = "text" name="other1" placeholder = "Specify your work domain" value="" width="100%" />
		    		
			</div>
		</div>
		<div class="form-group">

		 <label>EMPLOYER / SECTOR <span class="req">* </span></label> 
		<input class="form-control" type = "text" name="emp" placeholder = "Owned company name (for Entrepreneurs) / Employed company " value=""/>
		
		</div>
		 	<div class="form-group">
		 <label>DESIGNATION <span class="req">* </span></label> 
		<input class="form-control"type = "text" name="designation" placeholder = "Designation" value=""  />		 	
</div>
		<div class="form-group">

		<label>WILLINGNESS <span class="req">* </span></label> 



		<select class="form-control" name="willingness" id="willingness" onchange="sel4()">
		<option value="Not interested">Not interested</option>
		<option value="To take seminars">To take seminars</option>
		<option value="To conduct workshops">To conduct workshops</option>
		<option value="To recruit">To recruit</option>
		<option value="To give placement training">To give placement training</option>
		<option value="To offer internships">To offer internships</option>
		<option value="To support as mentors/guides">To support as mentors/guides</option>
		<option value="Others">Others</option>
		</select>


</div>
		 
				<div class="form-group">

		<div id="otherwill">
		 <label>OTHER <span class="req">* </span></label></b> 
			<input class="form-control"type = "text" name="other11" placeholder = "Specify your willingness" value="" width="100%"  />
		     
		</div>
</div>

<input class="form-control" style="background:blue;color:white;font-weight:800;font-size:150%;" type="submit" name="update" value="UPDATE"></input>
		</fieldset>
    </form></div></div></div></div>
</form>

<footer class="blog-footer">

 <div class="content">
    <p style="text-align: center;"><img alt="TCE logo" class="transparent copyprevention-processed" src="img/tce_logo.png" style="width: 115px; height: 106px;"></p>  </div>
</div>
<br>
<div class="content">
    <p style="text-align: center;color:white;font-weight:bold">Copyright © 2020 Thiagarajar College of Engineering, Madurai 625 015.</p>  </div>
</div>
  </div>
   
</footer>

</BODY>

</HTML>
<!--Surya started here-->
<?php 
	$db = mysqli_connect('localhost', 'root', '', 'alumni');

	// initialize variables
	$email = "";
    $mobile = "";
    $branch = "";
    $update = false;
   
    if (isset($_POST['update'])) {
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
		$branch = $_POST['branch'];
		$designation = $POST['designation'];
		$emp         = $POST['emp'];
    
        mysqli_query($db, "UPDATE db1 SET email='$email', mobile='$mobile', branch='$branch' WHERE db1.email='".$_SESSION['user']."'");
        header('location: home2.php');
    }
    ob_end_flush();
?>
<!-- Surya ended here-->
