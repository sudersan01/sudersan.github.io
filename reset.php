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
</script>
	<title>Reset</title>
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
		.button {
    background-color:  #000033;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
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


		.form input[type="checkbox"],
		.form input[type="radio"],
		.form select
		{
			width:12%;
			padding:4%;
			margin-left:12px ;
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

	<header></header>
	<br><br><br><br><br><br><br>
	<form  name="signup" action="resetchange.php"  method = "post" >
		<center>

			<img src="gif.gif" alt="Smiley face" height="250" width="250">
			<br><br><br><br><br>
			<input type="submit" class="button" value="Click To Continue..">

		</center>

		
		
	</form>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>