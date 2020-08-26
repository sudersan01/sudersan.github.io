<!-- Surya Rumesh and Abhijith Started -->
<?php
session_start();

if(!isset($_SESSION["user"])){
	header('Location: signin.php');
}

?>
<!-- Surya Rumesh Abhijth ended-->
<! DOCTYPE HTML>
<HTML>

<HEAD>
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

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: #fafbff;
  border-radius: 10px;
  overflow: hidden;
  max-width: 650px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: white;
  font-size: 16px;
}
table tbody tr {
  height: 48px;
  border-bottom: 1px solid #ede3c0;
}

table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}

@media screen and (max-width: 35.5em) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 8px 0;
  }
  table tbody tr td {
    padding-left: 45%;
    margin-bottom: 12px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    position: absolute;
    font-weight: 700;
    width: 40%;
    left: 10px;
    top: 0;
  }
  
}

 table tbody tr :nth-child(1){
  
 width:200px;
 text-align:center;
}
table tbody tr :nth-child(2){
padding-left: 3%;
width: 400px
}

body {

  font: 400 14px 'Calibri','Arial';
  padding: 20px;
}

blockquote {
  color: white;
  text-align: center;
}

button.mbtn {
  padding:0.6em 2em;
  border-radius: 8px;
  color:#fff;
  background-color:#1976d2;
  font-size:1.1em;
  border:0;
  cursor:pointer;
  margin:1em;
}

button.mbtn.green
{
    background-color:#192e5e;
}





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
	<h1>PROFILE DETAILS<h1> 
</div>
<br>
<div style="margin: 0 0 0 1030px"><img src="tce.png" width="50px" height="50px" style="border-radius: 25px;vertical-align: middle;" onmouseover="f1()" onmouseout="f2()">&nbsp&nbsp<span style="vertical-align: middle;font-weight: bold;text-overflow: ellipsis;"><?php echo $_SESSION["user"] ?></span><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="index.html"><button class="button button3">Log out</button></a></div>
<br>
<!-- Surya Rumesh edited here -->
<?php
$sql=new PDO('mysql:host=localhost;dbname=alumni','root','mysql');
$stm=$sql->prepare("select * from db1 where db1.email='".$_SESSION['user']."'");
            $stm->execute();
            $result1=$stm->fetchAll();

                  ?>
                  <?php foreach($result1 as $row)
                  { ?>
                  <table align= center border=1>
        <tr><td style="background-color:#192e5e; color:white"><b>Name</b></td><td><b><?php echo $row['NAME']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Email ID</b></td><td><b><?php echo $row['EMAIL']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Mobile no</b></td><td><b><?php echo $row['MOBILE']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Degree</b></td><td><b><?php echo $row['DEGREE']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Branch</b></td><td><b><?php echo $row['BRANCH']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Specialization</b></td><td><b><?php echo $row['SPECZ']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Year of joining</b></td><td><b><?php echo $row['YOJ']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Year of Graduation</b></td><td><b><?php echo $row['YOG']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Employer</b></td><td><b><?php echo $row['EMPLOYER']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Location</b></td><td><b><?php echo $row['LOCATION']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Designation</b></td><td><b><?php echo $row['DESIGNATION']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Woking information</b></td><td><b><?php echo $row['WORK_INFO']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Domain</b></td><td><b><?php echo $row['DOMAIN']; ?></b></td></tr>
        <tr><td style="background-color:#192e5e; color:white"><b>Willigness</b></td><td><b><?php echo $row['WILLINGNESS']; ?></b></td></tr>
        <?php } ?>

        <table>
    <a href="update.php">
        <center><button class="mbtn green" >Edit</button></center>
    </a>
<!-- Surya Rumesh ended here -->
</BODY>

</HTML>
