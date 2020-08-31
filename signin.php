<!DOCTYPE HTML>

<HEAD>
	
	<meta charset="utf-8">
    <meta name="description" content="Thiagarajar College of Engineering (TCE)">
<meta name="keywords" content="TCE, Engineering, College">
  <title>Alumni sign In | Thiagarajar College of Engineering - (TCE)</title>
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
.myform
{
  box-shadow: 0 4px 8px 0 darkslategray, 0 6px 20px 0 darkslategray;
  padding: 20px;
  background-color: white;
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
    font-variant: normal;text-transform: uppercase;text-decoration: rgb(131, 0, 0);padding: 3px 12px; height:40px;" data-toggle="modal" data-target="#myModal">
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
        <div class="col-md-6">



<form  action="login.php"  method = "post" class="myform">
	
	<fieldset>
		<h1 style="color:darkslategray;font-weight:700;font-size:120%;margin-left:180px;">SIGN IN</h1><br>
		 
<div class="form-group">
<label for="">USERNAME </label> 
<input class="form-control" type="email" name="username"  placeholder = "Email" required="true"  >  
</div>
		 
<div class="form-group">
<label for="">PASSWORD </label> 
<input class="form-control" type="password" name="password" placeholder = "Password" >  
 
</div>

<button  class="btn btn-primary btn-block" type="submit"   class="button btn-lg btn-block"style="font-weight:600;font-size:100%;">Login
		</button>
		<button  class="btn btn-info btn-block" type="button" onclick="location.href='send_mail.php'"  name="forgotpw" class="button btn-lg btn-block"style="font-weight:600;font-size:100%;">Forgot Password
		</button>
		
		
		</fieldset>
	</form>


</div></div></div>


<br>
 
 
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