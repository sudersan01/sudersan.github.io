<!DOCTYPE HTML>

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
	msg.innerHTML = "* As per your degree marksheet ( IN CAPITAL LETTERS )"
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
	<title>Alumni Insert</title>
	<style>
		.body
		{
			//background :#f2ebbf;
			//background :#f2eccb;
			//background :#f7f2d7;
			background-image:url("bg.png");
			background-color :#f7f2d7;
			background-repeat:no-repeat;
		}
		.form
		{
			align:center ;
			background:#D8E1F5    ;
			//background:white;
			margin : 10px auto ;
			max-width : 800px;
			//max-width : 600px;
			padding : 20px
		}
		
		.form h1,
		.form h2
		{
			background : #0C2459;
			//background:#a93226;
			padding:20px;
			font-size : 200%;
			font-weight:300;
			text-align:center;
			color:#fff;
			margin:-16px -16px -16px -16px
		}

		.form h22
		{
			background : #0C2459  ;
			//background:#a93226;
			padding:20px;
			font-size : 150%;
			font-weight:200;
			text-align:center;
			color:white;
			margin:-16px -16px -16px -16px
		}
		
		.form input[type="text"],
		.form input[type="email"],
		.form input[type="password"],
		.form select,
		.form textarea
		{
			
			width:72%;
			//background:#f7f7d7;
			background:#fff;
			float: right;
			clear : both;
			
			padding:1%;
		}
	
		.form select
		{
			
			width:74.5%;
			//background:#f7f7d7;
			background:#fff;
			float: right;
			clear : both;
			
			padding:1%;
		}


		.form input[type="checkbox"],
		.form input[type="radio"]
		{
			width:12%;
			padding:4%;
			margin-left:5px ;
			background:white;
			margin-bottom:3%;
			
			color:white;

		}

		.form input[type="submit"]
		{
			box-sizing :border-box;
			width:100%;
			//background:#a93226;
			background:#0C2459;
			margin-bottom:4%;
			padding:4%;
			color:white;
			font-size:150%
		}



		.form label {
    
			
			margin-bottom:4%;
			padding:1%;
		}
		.form span {
    
			float :right;
			
			padding:1%;
		}
		
	</style>
</HEAD>

<BODY class="body"  >
<br><br><br><br><br><br><br><br>
<div class="form" >
	<header></header>
	<form  name="insertmember" action="insertinto.php"  method = "post" >
		<h1>INSERT</h1><br><br>
		<b><label>NAME : <font color="red" > * </font></label></b><input type = "text" name="name" placeholder = "Name" value="" />
		<br>
		<br>
		<br>
		<b><label>REGISTER NUMBER : <font color="red" > * </font></label></b><input type = "text" name="regno" placeholder = "Register number" value=""  />
		<br>
		<br>
		<span id="confirmMsg" class="confirmMsg"></span>
		
		<br>
		<br><br>
		<b><label>BATCH : <font color="red" > * </font></label></b><input type = "text" name="batch" placeholder = "Year of joining" value="" />
		<br>
		<br>
		<br>
		<b><label>PASSED OUT : <font color="red" > * </font></label></b><input type = "text" name="graduation" placeholder = "Year of graduation" value="" />
		<br>
		<br>
		<br>
		<b><label>BRANCH : <font color="red" > * </font></label></b>


	<select name="branch">
		<option value="">---Select your department---</option>
		<option value="Civil">Civil Engineering</option>
		<option value="CSE">Computer Science and Engineering</option>
		<option value="ECE">Electronics and Communication Engineering</option>
		<option value="EEE">Electronics and Electrical Engineering</option>
		<option value="EIE">Electronics and Instrumentation Engineering</option>
		<option value="IT">Information Technology</option>
		<option value="Mechanical">Mechanical Engineering  </option>
		<option value="Mechatronics">Mechatronics</option>
		<option value="Architecture">Architecture</option>
	</select>

<br>
<br>	
<br><br>


		<b><label>DEGREE (At TCE) : <font color="red" > * </font></label></b>			<input type="checkbox" name="degree" value="UG" id="UG" >Under Graduate</input>
					&nbsp	&nbsp &nbsp &nbsp	&nbsp &nbsp &nbsp	&nbsp &nbsp &nbsp	&nbsp &nbsp &nbsp &nbsp &nbsp	&nbsp &nbsp &nbsp
			<input type="checkbox" name="degree" value="PG" id="PG" onclick="fun5()">Post Graduate</input>
		
		<div id="pg"><br>
		<b><label>SPECIALIZATION: <font color="red" > * </font></label>
			
		</b><input type = "text" name="specialization"  value = "" placeholder="Enter specialization for PG" ></input>
		</div>
		<br>
		<br>
		<b><label>HIGHER EDUCATION : </label>
	<select name="hiedu" id="hiedu" onchange="sel1()">
			<option value="none"  >---None---</option>
			<option value="Masters" id="Masters" onclick="fun11()" >Masters</option>
			<option value="Doctoral" id="Doctoral" onclick="fun11()">Doctoral</option>
			<option value="Others" id="other2" onclick="fun10()">Others</option>
	</select>


		<div id="hieduspec">
		<br>
		<br>
		<b><label>SPECIALIZATION : <font color="red" > * </font></label>
		
			</b><input type = "text" name="spec"  value = "" placeholder="Enter specialization" ></input>
		</div>
		
		
		<div id="instituition">
		<br>
		<br>
		<b><label>INSTITUITION : <font color="red" > * </font></label>
		
			</b><input type = "text" name="instituition"  value = "" placeholder="Enter the instituition name" ></input>

		</div>
		
		<div>
		<br>
		<br>
		<b><label>MOBILE NUMBER  : <font color="red" > * </font></label></b>
			<input type="text" name="mobile" value="" id="mobile" placeholder ="Mobile number" ></input></div>
			<br>
		<span id="cnfrm" class="cnfrm"></span>
		
		<br>
		<b><label>EMAIL ID : <font color="red" > * </font></label></b>
			<input type="email" name="email" value=" " placeholder ="Email id"></input>
		<br>
		<br>
		<br>
		<b><label>PASSWORD : <font color="red" > * </font></label></b>
		
			<input type="password" name="pw1" id="pw1" value="" placeholder ="Password" onkeyup="checkpass()"></input>
		<br>
		<br>
		<br>
		<b><label>CONFIRM PASSWORD : <font color="red" > * </font></label></b>
		
			<input type="password" name="pw2" value="" id="pw2" placeholder ="Confirm password" onkeyup="checkpass()"></input>
			<br><br>
			<span id="confirmMessage" class="confirmMessage"></span>
		<br><br><br>
		<h2>Career Information</h2>
		<br>
		<br><br>
		<b><label>WORK INFORMATION : <font color="red" > * </font></label></b>


		<select name="workinfo" id="workinfo" onchange="sel2()">
		<option value="">---Select your option---</option>
		<option value="Corporate">Corporate</option>
		<option value="Government">Government</option>
		<option value="Entrepreneur">Entrepreneur</option>
		<option value="Retired">Retired</option>
		<option value="Others">Others</option>
		</select>

		
		<div id="other">
		<br><br>
		   <b><label>OTHER : <font color="red" > * </font></label></b> <input width="100%" type = "text" name="other" placeholder = "Specify your work information" value="" />
		</div>
		
		<br><br><br>
		<b><label>DOMAIN : <font color="red" > * </font></label></b>



		<select name="domain" id="domain" onchange="sel3()">
		<option value="">---Select your option---</option>
		<option value="Hardware">Hardware</option>
		<option value="Software">Software</option>
		<option value="Management">Management</option>
		<option value="Research and Development">Research and Development</option>
		<option value="Teaching">Teaching</option>
		<option value="Others">Others</option>
		</select>



		<br>
		
		<div id="otherdom">
		<br><br>
		    <b><label>OTHER : <font color="red" > * </font></label></b> <input type = "text" name="other1" placeholder = "Specify your work domain" value="" width="100%"/>
		    <br>
		</div>

		<b><br><br><label>EMPLOYER : <font color="red" > * </font></label></b><input type = "text" name="emp" placeholder = "Owned company name (for Entrepreneurs) / Employed company " value="" />
		<br>
		
		<br>
		<br>
		<b><label>DESIGNATION : <font color="red" > * </font></label></b><input type = "text" name="designation" placeholder = "Designation" value="" />
		
		<br>
		<br>


		<b><br><br><label>LOCATION : <font color="red" > * </font></label></b><input type = "text" name="place" placeholder = "Place Of Work " value="" />
		<br>
		
		<br>
		<br>

		
		
		<b><label>WILLINGNESS : <font color="red" >  </font></label></b>



		<select name="willingness" id="willingness" onchange="sel4()">
		<option value="Not interested">Not interested</option>
		<option value="To take seminars">To take seminars</option>
		<option value="To conduct workshops">To conduct workshops</option>
		<option value="To recruit">To recruit</option>
		<option value="To give placement training">To give placement training</option>
		<option value="To offer internships">To offer internships</option>
		<option value="To support as mentors/guides">To support as mentors/guides</option>
		<option value="Others">Others</option>
		</select>



		<br>
		
		<div id="otherwill">
		<br><br>
		    <b><label>OTHER : <font color="red" > * </font></label></b> <input type = "text" name="other11" placeholder = "Specify your willingness" value="" width="100%"/>
		    <br>
		</div>

		<b><br><br>


		<input type="submit" name="submit" value="Click to add"></input>
		
	</form>
</div>
<br><br><br>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>