<?php
session_start();
if(!isset($_SESSION["user"])){
	header('Location: signin.php');
}
?>

<!DOCTYPE HTML>

<HEAD>
<script>

 function fun1(){
     if(document.getElementById('pg').checked) {
  document.getElementById('hide').style.display="block";
}  
      }
      function fun2(){
     if(document.getElementById('ug').checked) {
  document.getElementById('hide').style.display="none";
}  
}
function fun3(){
     if(document.getElementById('other').checked) {
  document.getElementById('otext').style.display="block";
  document.getElementById('inst').style.display="block";
}
else 
{
  document.getElementById('otext').style.display="none";
  document.getElementById('inst').style.display="block";
}  
      }

</script>
	<meta charset="utf-8">
    <meta name="description" content="Thiagarajar College of Engineering (TCE)">
<meta name="keywords" content="TCE, Engineering, College">
  <title>Alumni signup |Thiagarajar College of Engineering - (TCE)</title>
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
       <header class="blog-header py-3 ">
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
    <a class="nav-link "  href="register1.html"><span>Visit the instituition</span></a>         </li>   
<li class="nav-item">  
   <a class="nav-link "   href="signin.php"><span> Search</span></a>       </li>  
<li class="nav-item"> <button type="button" class="btn" style="color: #830000; Font :Helvetica;font-size:16.8px; font-weight:700;  font-style: normal;
    font-variant: normal;text-transform: uppercase;text-decoration: rgb(131, 0, 0);padding: 3px 12px; height:40px;" data-toggle="modal" data-target="#myModal">
	UserManual</button> </li> 
 <!--<a class="nav-link "   href="User Manual-Alumni.pdf" style="text-decoration:none" target="_top">UserManual</a> --> 


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

<div class="container mt-2 mb-4">
    <div class="row justify-content-md-center">
        <div class="col-md-6 ">

	<form   name="signup" action="send_form_email.php"  method = "post" >
	<fieldset>
		<center><h2 style="color:blue;font-weight:800;">ALUMNI VISIT FORM</h2></center><br>
	 
<div class="form-group">
<label for="name">NAME  <span class="req">* </span>  </label> 
<input class="form-control" type="text" name="name"  placeholder = "Name" value="" required />  
<div id="errLast"></div>
</div>
		
			
<div class="form-group">
<label for="">DEPARTMENT <span class="req">* </span>  </label> 
<select name="dep" class="form-control" required >
					
                                    <option value="Civil">Civil</option>
                                    <option value="Mechanical">Mechanical</option>
                                    <option value="ECE">ECE</option>
                                    <option value="EEE">EEE</option>
                                    <option value="CSE">CSE</option>
                                    <option value="IT">IT</option>
                                    <option value="Electrical and Instrumentation Engineering">Electrical and Instrumentation Engineering</option>
                                    <option value="Architecture">Architecture</option>
                                    <option value="Mechatronics">Mechatronics</option>
									<option value="AppScience">Applied Science</option>
                                    <option value="Select Your Department" selected>Select Your Department</option>
                                    </select> </div>
		
		
	
<div class="form-group">
<label for="">YEAR OF JOINING <span class="req">* </span>  </label> 
<input class="form-control" type = "text" name="batch" placeholder = "Year of joining" value="" required />   
 
</div>
			
	
<div class="form-group">
<label for="">EMAIL ADDRESS<span class="req">* </span>  </label> 
<input class="form-control" type = "text" name="email" placeholder = "Email Address" value="" required />   
 
</div>


	
		
<div class="form-group">
<label for="">MOBILE NUMBER <span class="req">* </span>  </label> 
<input class="form-control" type = "text" name="mob" placeholder = "Mobile Number" value="" required />   
 
</div>



<div class="form-group">
<label for="">DATE OF VISIT <span class="req">* </span>  </label> 
<input class="form-control" type = "date" name="dat" placeholder = "Date Of Visit" value="" required />   
 
</div>

	 
		
		
<div class="form-group">
<label for="">PURPOSE <span class="req">* </span>  </label> 
<input class="form-control" type = "text" name="description" placeholder = "Purpose"value="" required />   
 
</div>

 
 <div class="form-group">
  <label for="ug">DEGREE @ TCE <span class="req">* </span>  </label>
     	  <input type="radio" name="up" id="ug" value="UG" checked onclick="fun2()" />UG</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			<label for="pg"><input type="radio" name="up" id="pg" value="PG" onclick="fun1()"/>PG</label>
		</b>
		<div id="hide" style="display: none;">
		
	<label for="spez">SPECIALIZATION<span class="req">* </span>  </label>	
		<input class="form-control"  type = "text" name="spez" placeholder = "Specialization" value="" />
   	    </div>
		
		
    </div>
 
 <br>

<div class="form-group">
<label for="masters">HIGHER EDUCATION   
<input class="form-control" type="radio" name="he" id="mast" value="Masters" checked onclick="fun3()"/>&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp Masters</label>&nbsp&nbsp&nbsp
 <label for="doctural">	<input class="form-control" type="radio" name="he" id="doct" value="Doctoral" onclick="fun3()"/>Doctoral</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <label for="others"><input class="form-control" type="radio" name="he" id="other" value="Others" onclick="fun3()"/>Others</label>
	
	<br>
	<div id="otext" style="display: none;">
                    <br>
                            <b><label for="others">Specify Details</label>&nbsp&nbsp&nbsp&nbsp
                            	<input class="form-control" type="text" name="others" placeholder="If others,specify details..."/>
            </div>
            		<br>
            <div id="inst" style="display: none;">
                    <br>
                               <label for="in">Institution</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                               <input class="form-control" type="text" name="in" placeholder="Institution"/>
                            </b>  
            </div>
	
	
</div>

<div class="form-group">
<label for="emp">JOB  <input class="form-control" type="radio" name="emp" id="wc" value="Working at a company" checked/>Working at a company</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<label for="entre"> <input class="form-control" type="radio" name="emp" id="ent" value="Entrepreneur"/>Entrepreneur</label>&nbsp&nbsp&nbsp&nbsp&nbsp <br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <label for="retire"><input class="form-control"type="radio" name="emp" id="ret" value="Retired" />Retired</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 
<label for="others"><input class="form-control" type="radio" name="emp" id="ot" value="Others" />Others</label>&nbsp&nbsp&nbsp&nbsp&nbsp
 
</div>
		  
<div class="form-group">
		 <label for="fow">FIELD OF WORK </label> 
            			 <input class="form-control" type="text" name="fow" placeholder="Field Of Work"/>
			
	</div>		

       
	  
<div class="form-group">
			
			<label for="emp1">PAST/PRESENT EMPLOYMENT DETAILS </label> 
            			 <input class="form-control" type="text" name="text1" placeholder="1......"/><br> 
            			 <input class="form-control" type="text" name="text2" placeholder="2......"/>
			
			
			
	</div>	
      <br>        

		 <center><button  class="btn btn-primary btn-block"type="submit"  class="button btn-lg btn-block"style="font-weight:800;font-size:150%;"><i class="fa fa-paper-plane" aria-hidden="true"></i>  Send Message</button></center>
		</fieldset>
	</form>
</div>
</div></div>

 
 
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
