<?php
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
  header('Location: signin.php');
}
?>
<!DOCTYPE HTML>
<html>

<head>
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
.mydiv
{
  border: 1px darkslategray solid;
  box-shadow: 0 4px 8px 0 darkslategray, 0 6px 20px 0 darkslategray;
  padding: 20px;

  background-color: white;
  margin-right: 200px;
  margin-left:200px;
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
<div style="margin: 0 0 0 1000px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<img src="tce.png" width="50px" height="50px" style="border-radius: 25px;vertical-align: middle;" onclick="fl()"><br><br>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION["user"] ?>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="insertpage.php">Insert</a></li>
      <li><a href="updatepage.php">Update</a></li>
      <li><a href="database1.php">Search</a></li>
      <li><a href="verify.php">Verify</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </div>
</div><span style="vertical-align: middle;font-weight: bold;text-overflow: ellipsis;">
  </div>
  <br>

<section class="container">
  <div class="mydiv">
    <h3 align="center"><b>Publish Events here !</b></h3>
<!---<form action="upload.php" method="post" enctype="multipart/form-data"> // do not remove this!!!! for reference
  <label>Event name:</label><br>
  <input type="textbox" name="input-1" id="input-1" size=30 ><br>
  <label>Event description:</label><br>
  <textarea name="input-2" id="input-2" rows=3 size=50> </textarea><br>
    <label>Select Image File:</label><br>
    <input type="file" name="image"><br><br>
    <input type="submit" name="submit" value="Upload"> 
</form>-->
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label>Event name: </label> 
<input class="form-control" type="textbox" name="input-1"  id="input-1" size="30" required="true"  >  
</div>
     
<div class="form-group">
<label>Event description </label> 
<textarea class="form-control" name="input-2" rows="auto" size=50></textarea>  
</div>

<div class="form-group">
<label>Select Image File:</label><br>
<input class="form-control" type="file" name="image"><br><br>
</div>
<!-- <div class="form-group">
<input type="submit" name="submit" value="Upload">
</div> -->
 
<div class="form-group">

<button  class="btn btn-success btn-block" type="submit" name="submit"  class="button btn-lg btn-block" onclick="location.href='upload.php'" style="font-weight:600;font-size:100%";>Publish Event &nbsp;&nbsp;<span class="glyphicon glyphicon-list-alt"></span>
    </button>
  </div>
</div>


</section>
<footer><center><img src="hel.png"></center> </footer>
</BODY>

</html>