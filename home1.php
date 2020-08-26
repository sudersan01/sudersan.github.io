<!-- abhi started here -->
<?php
session_start();
if(!isset($_SESSION["user"])){
	header('Location: signin.php');
}
?>
<!-- abhi ended here -->
<! DOCTYPE HTML>
<HTML>

<HEAD>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
.body
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
    width: 75%;
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

#alu tr{background-color:white;}

#alu tr:hover {background-color: #ddd;}


.two {
    //margin-left: 15%;
    height: 1100px;
	//float: left;
	padding: 50px;
    }
.two li
{text-decoration:none;}
</style>
<script type="text/javascript">
	function f1()
	{
		document.getElementById('alu').style.display="block";
	}
	function f2()
	{
		document.getElementById('alu').style.display="none";
	}
</script>
</HEAD>

<BODY class="body" background="bg.png">
<br><br><br><br><br><br><br>
<div class="heading">
	<h1>ALUMNI DATABASE<h1> 
</div>
<br>
<div style="margin: 0 0 0 1000px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="tce.png" width="50px" height="50px" style="border-radius: 25px;vertical-align: middle;" onclick="fl()"><br><br>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION["user"] ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="home2.php">User profile</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </div>
</div><span style="vertical-align: middle;font-weight: bold;text-overflow: ellipsis;">
	</div>
	<br>

<section class="container">

    <div class="one">
	<font color="#0C2459" >
	<h2 >Vision :</h2>
	<p>To acheive the instituition's mission and goal by linking the instituition with its alumni across the globe.</p>
	<h2 >Mission :</h2>
	<p>
		<ul>
		<li>To coordinate and support the alumni association activities to promote instituition's academic, industry interface, placement/internship, research, and outreach programs.</li>
		<li>To facilitate communication with alumni and to strengthen alumni bonds of fellowship, proffessional association and instituitional affiliation.</li>
		<li>To encourage alumni to stay connected and to Leverage the resources, talents, nd initiatives of alumni to advise, guide, advocate the instituition in acheiving the respective department's mission and goals.</li>
		<li>To include the culture of philanthropy among the alumni body, to ensure that the alumni continue to contribute their time, talent and financial resources to the betterment of the instituition.</li>
		</ul>
	</p>
	<p>
	TCE Alumni Association is functioning at the institute and through its chapters spread across the country and abroad.
	</p>	
	<p>
		<ul>
		<li>Madurai Chapter</li>
		<li>Neyveli Chapter</li>
		<li>Chennai Chapter</li>
		<li>Coimbatore Chapter</li>
		<li>Bangalore Chapter</li>
		<li>U.A.E Chapter</li>
		<li>U.S Chapter West</li>
		<li>U.S Chapter East</li>
		<li>Australia Chapter</li>
		<li>Singapore Chapter</li>
		</ul>
	</p>
	<p>
	The activities under TCE Alumni Association are listed below.
	</p>
	<p>
	<ul>
	<li>Alumni Portal</li>
	<li>Alumni Scholarships</li>
	<li>Reunions</li>
	<li>Personality Development Camps, Mentorship Programs</li>
	<li>Academic and Industrial Interaction by Alumni</li>
	<li>Harmonize Alumni Support for Internships and Placements</li>
	</ul>
		
	</p>

    </font>
    </div>

    <div class="two">
	<ul type=none>
		<li><a href="visit.php">> Visit the instituition</a></li>
	<li><a href="database1.php">> Search</a></li>
	
	</ul>
    </div>

</section>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>
