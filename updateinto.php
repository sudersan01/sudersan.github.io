<html>

<head>

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
.two {
    //margin-left: 15%;
    height: 1100px;
	//float: left;
	padding: 50px;
    }
.two li
{text-decoration:none;}
</style>
</head>

<body class="body" background="bg.png">
<br><br><br><br><br><br><br>
<div class="heading">
	<h1>UPDATE THE DATABASE<h1>

		
</div>

<section class="container">
<?php

	if(isset($_POST['submit']))
	{
		
			$SNO1 = 1;
			$REGNO1=$_POST["regno"];
			$NAME1=$_POST["name"];
			$EMAIL1=$_POST["email"];
			$PASSWORD1=$_POST["pw1"];
			$MOBILE1=$_POST["mobile"];
			$DEGREE1=$_POST["degree"];
			$BRANCH1=$_POST["branch"];
			$SPECZ1=$_POST["specialization"];
			$YOJ1=$_POST["batch"];
			$YOG1=$_POST["graduation"];
			$EMPLOYER1=$_POST["emp"];
			$LOCATION1=$_POST["place"];
			$DESIGNATION1=$_POST["designation"];	
			$WORK_INFO1=$_POST["workinfo"];
			$DOMAIN1=$_POST["domain"];
			$WILLINGNESS1=$_POST["willingness"];
			$Higher_Edu1=$_POST["hiedu"];
			$Instituition1=$_POST["instituition"];
			$Course21=" ";
			$Branch21=" ";
			$Specialization21=" ";
			$YOJ21=" ";
			$YOG21=" ";
			$College21=" ";

		//	echo "Variables Set";
       
		//	ECHO "$SNO1"; ECHO "$REGNO1"; ECHO "$NAME1" ; ECHO "$EMAIL1"; ECHO "$PASSWORD1"; ECHO "$MOBILE1"; ECHO "$DEGREE1"; ECHO "$BRANCH1"; ECHO "$SPECZ1"; ECHO "$YOJ1"; ECHO "$YOG1"; ECHO "$EMPLOYER1" ; ECHO "$LOCATION1"; ECHO "$DESIGNATION1"; ECHO "$WORK_INFO1"; ECHO "$DOMAIN1"; ECHO "$WILLINGNESS1"; ECHO "$Higher_Edu1"; ECHO "$Instituition1"; ECHO "$Course21"; ECHO "$Branch21"; ECHO "$Specialization21"; ECHO "$YOJ21"; ECHO "$YOG21"; ECHO "$College21";

			
			//echo "Variables printed";

			

				$username="root";
				$password="";
				$database="alumni";
				$server="localhost";
 

 			//echo "Connections Set";
	

			$conn = mysqli_connect($server, $username, $password, $database);

			if($conn)
			{
				//echo "Connection success";
				
				
					 $sql = "UPDATE db1 SET SNO='".$SNO1."' , NAME='".$NAME1."' , EMAIL='".$EMAIL1."' , PASSWORD='".$PASSWORD1."' , MOBILE='".$MOBILE1."' , DEGREE='".$DEGREE1."' , BRANCH='".$BRANCH1."' , SPECZ='".$SPECZ1."' , YOJ='".$YOJ1."'  , YOG='".$YOG1."' , EMPLOYER='".$EMPLOYER1."' , LOCATION='".$LOCATION1."' , DESIGNATION='".$DESIGNATION1."' ,WORK_INFO='".$WORK_INFO1."' ,
					     DOMAIN='".$DOMAIN1."' , WILLINGNESS='".$WILLINGNESS1."' , Higher_Edu='".$Higher_Edu1."' , Instituition='".$Instituition1."' ,
					     Course2='".$Course21."' , Branch2='".$Branch21."' , Specialization2='".$Specialization21."' , YOJ2='".$YOG21."' , YOG2='".$YOG21."' , 
					     College2='".$College21."' WHERE REGNO='".$REGNO1."'";


				if (mysqli_query($conn, $sql)) 
				{
					 //echo "mysqli_error($conn)";
     				// echo "Updated successfully";
     				echo '<center>';
     				 echo ' <img src="updateimage.jpg" height=400 px width=400 px/> '; 
     				 echo '</center>';
				} 
				else
				{
					//echo mysqli_error($conn);
					//echo "Update Error";
					echo '<center>';
     				 echo ' <img src="errorimage.jpg" height=400 px width=400 px/> '; 
     				 echo '</center>';
				}
			}

			else
			{
				echo "Connection error";
			}

	}
	else
	{
			echo "The Form is Not Submitted";
	}					

$conn->close();
	
?>
</section>
<footer><center><img src="hel.png"></center> </footer>
</body>

</html>