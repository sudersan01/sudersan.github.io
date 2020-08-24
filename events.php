<?php
session_start();
?>
<! DOCTYPE HTML>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
</head>

<BODY class="body" background="bg.png">
<br><br><br><br><br><br><br>
<div class="heading">
	<h1>ALUMNI DATABASE<h1> 
</div>
<br>

<div style="margin: 0 0 0 1000px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="tce.png" width="50px" height="50px" style="border-radius: 25px;vertical-align: middle;" onmouseover="f1()" onmouseout="f2()"><span style="vertical-align: middle;font-weight: bold;text-overflow: ellipsis;"><br>
	<?php echo $_SESSION["user"] ?></span><br></div>
	<br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
		<a href="insertpage.php">
			<button class="button button3">INSERT</button>
		</a>
		<a href="updatepage.php">
			<button class="button button3">Update</button>
		</a>
		<a href="database1.php">
			<button class="button button3">SEARCH</button>
		</a>
		<a href="verify.php">
			<button class="button button3">VERIFY</button>
		</a>
		<a href="events.php">
			<button class="button button3">Events</button>
		</a>
		<a href="index.php">
			<button class="button button3">Log out</button>
		</a>

		<br>

	
	</div>
<br>

<section class="container">

<form action="upload.php" method="post" enctype="multipart/form-data">
	<label>Event name:</label><br>
	<input type="textbox" name="input-1" id="input-1" size=30 ><br>
	<label>Event description:</label><br>
	<textarea name="input-2" id="input-2" rows=3 size=50> </textarea><br>
    <label>Select Image File:</label><br>
    <input type="file" name="image"><br><br>
    <input type="submit" name="submit" value="Upload">
</form>



</section>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</HTML>