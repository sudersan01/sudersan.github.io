<?php
session_start();

if(!isset($_SESSION["user"])){
  header('Location: signin.php');
}
?>

<!DOCTYPE html>
<html>
<head>

  <style>
      .body
    {
      background-image:url("bg.png");
      background-color :#f7f2d7;
      background-repeat:no-repeat;
    }.button{
background-color: purple;
border:none;
color: white;
padding: 10px 20px 15px 20px;
text-align:center;
text-decoration:none;
display:inline-block;
font-size:20px;
margin: 4x 4px;
cursor:pointer;
border-radius: 12px;
}
 .searchterms {
  width: 10%;
  border: 1px solid #a7a6ab;
  padding: 2px;
  height: 20px;
  border-radius: 2px 2px 2px 2px;
  outline: none;
  color: #000000 ;
}
.searchbutton {
  width: 80px;
  height: 40px;
  border: 2px solid #a7a6ab;
  background: black;
  text-align: center;
  color: #fff;
  border-radius: 7px 7px 7px 7px;
  cursor: pointer;
  font-size: 17px;
  }


   </style>
  <title>Database</title>
  <link rel="stylesheet" type="text/css" href="db1.css">
  <!-- <link href="layout.css" rel="stylesheet" type="text/css" />
        <link href="menu.css" rel="stylesheet" type="text/css" /> -->
  <script type="text/javascript">
    function fun1()
    {
     if(document.getElementById('bn').checked) {
      
  document.getElementById('hide1').style.display="block"; 
    }
  }
  </script>
</head>

<body bgcolor="#ffe6d0" class="body">
<br><br><br><br><br><br><br><br>
<div class="fix">
<div class=div1><br><br><br><br>
<center><h1 style="margin: -70px auto;">ALUMNI DETAIL</h1></center></div>
<!-- Aishwarya edited here-->
<div class="div1">
<center>
<form action='display.php' method="post">
<input type="text" name="search" placeholder="Search through name/mail/branch/degree" class="searchterms">&nbsp;&nbsp;&nbsp;&nbsp;
   <button type="submit" name="submit-search" class="searchbutton"> Search </button>
</form>
   
</center>
<!-- Aishwarya ends here-->
</div>

<br>

      

<div class="div2" style="color: white;">
  <br>
<br>

<center>
<form method="post">
  <div class="red">
    <div class="block"><br><label> Name</label><input type="text" name="namei"/></div>
    <br>
     <div class="block"><label> Mobile Number</label><input type="text" name="mobi"></div>
    <br>
    <div class="block"><label> Email</label><input type="text" name="emaili"></div>
    <br>
    <div class="block"><label> Designation</label><input type="text" name="dei"></div>
    <br>
    <!-- <div class="block"><label>Location</label><input type="text" name="loc"></div> -->
    <br>
    






  </div>
  <div class="green">
    <!--
  <div class="block"><label> Work</label><select name="wrk" style="width: 140px;">
  <option value="none" selected></option>
  <option value="Government">Government</option>
  <option value="Corporate">Corporate</option>
  <option value="Entrepreneur">Entrepreneur</option>
  <option value="Retired">Retired</option>
  <option value="Others">Others</option>
    
</select></div>   
-->


   
  


<div class="block"><label> Qualification</label><select name="qual" style="width: 140px;">
  <option value="none" selected></option>
  <option value="B.E.">B.E</option>
  <option value="B.Tech">B.Tech</option>
  <option value="MCA">MCA</option>
  <option value="B.Sc">B.Sc</option>
  <option value="B.Arch">B.Arch</option>
  <option value="M.E">M.E</option>
  <option value="M.Tech">M.Tech</option>
  <option value="MBA">MBA</option>
  
</select></div>
        
<br>

    


    <div class="block"><label> Department</label>
<select name="deps" style="width: 140px;">
  <option value="none" selected></option>
  <option value="IT">IT</option>
  <option value="ECE">ECE</option>
  <option value="CSE">CSE</option>
  <option value="MCA">MCA</option>
  <option value="Mechanical">Mechanical</option>
  <option value="Mechatronics">Mechatronics</option>
  <option value="P.G">P.G</option>
  <option value="EEE">EEE</option>
  <option value="Electrical and Instrumentation Engineering">Electrical and Instrumentation Engineering</option>
  <option value="Civil">Civil</option>
  <option value="Applied Sciences">Applied Sciences</option>
  <option value="Architechture">Architechture</option>
  <option value="Others">Others</option>
</select>
</div>    
<br>


    <div class="block"><label> Year Of Joining</label><select id="year" name="yr" style="width: 140px;"></select>
  <script type="text/javascript">
    var start = 1957;
var end = new Date().getFullYear();
var options = "<option value='none'></option>";
for(var year = start ; year <end; year++){
  options += '<option value="'+year+'">'+ year +'</option>';
}
document.getElementById("year").innerHTML = options;
  </script>
</div>  
<br>



 <div class="block"><label> Year Of Graduation</label><select id="year1" name="yr1" style="width: 140px;"></select>
  <script type="text/javascript">
var start = 1960;
var end = new Date().getFullYear();
var options = "<option value='none'></option>";
for(var year1 = start ; year1 <end; year1++){
  options += '<option value="'+year1+'">'+ year1 +'</option>';
}
document.getElementById("year1").innerHTML = options;
  </script>
</div>  

<br>













<div class="block"><label>Employer/Sector</label><input type="text" name="comp"></div>
<br>
<div class="block"><label>General Search</label><input type="text" name="gensearch"></div>

<!-- <label> Domain</label><select name="doi" style="width: 140px;">
  <option value="none" selected></option>
  <option value="Hardware">Hardware</option>
  <option value="Software">Software</option>
  <option value="Management">Management</option>
  <option value="Research and Developement">Research and Developement</option>
  <option value="Teaching">Teaching</option>
  <option value="Others">Others</option>
    
</select>-->

<!--
<div class="block"><label> Willingness</label>
<select name="yn" style="width: 140px;">
  <option value="none" selected></option>
  <option value="seminars">To take seminars</option>
  <option value="workshops">To conduct workshops</option>
  <option value="recruit">To recruit</option>
  <option value="placement">To give placement training</option>
  <option value="interns">To offer interns</option>
  <option value="mentors">To support as mentors/guide</option>
  <option value="Others">Others</option>
  <option value="Not Intrested">Not Intrested</option>
  </select>
</div>
-->


  </div>
  <div class="blue">



  </div>




<br>
<br>
<br>
<br><br>
<br><br>

</form>
</center>
</div> 
</div>
<div class="div3">

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
  
 # Init the MySQL Connection
  if( !( $db = mysqli_connect( 'localhost' , 'root' , 'mysql' ) ) )
    die( 'Failed to connect to MySQL Database Server - #'.mysql_errno().': '.mysql_error());
  if( !mysqli_select_db($db,'alumni' ) )
    die( 'Connected to Server, but Failed to Connect to Database - #'.mysql_errno().': '.mysql_error());

if(isset($_POST['filter1'])){
$var1=$_POST['filter1'];

if(strcmp($var1,"nofil")==0)
{
 # Prepare the SELECT Query
  $selectSQL = 'SELECT * FROM `db1`';
 # Execute the SELECT Query
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    $rowcount=mysql_num_rows($selectRes);
    echo "<center>$rowcount results found</center>";
    ?>
<center><table id="alu" >
  <thead >
    <tr>
    <th>S.No.</th>
      <th>Name</th>
      <th>E-mail</th>
      <th>Mob.No.</th>
      <th>Qualification</th>
      <th>Department</th>
      <th>Year of Joining</th>
        <th>Year of Graduation</th>
      <th>Employer</th>
      <th>Current location</th>
      <th>Designation</th>
      <th>Work Information</th>
      <th>Domain or Field of work</th>
      <th>Willingness(To take seminars,lectures etc.)</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['SNO']}</td>
          <td>{$row['NAME']}</td>
          <td>{$row['EMAIL']}</td>
          <td>{$row['MOBILE']}</td>
          <td>{$row['DEGREE']}</td>
          <td>{$row['BRANCH']}</td>
          <td>{$row['YOJ']}</td>
          <td>{$row['YOG']}</td>
          <td>{$row['EMPLOYER']}</td>
          <td>{$row['LOCATION']}</td>
          <td>{$row['DESIGNATION']}</td>
          <td>{$row['WORK_INFO']}</td>
          <td>{$row['DOMAIN']}</td>
          <td>{$row['WILLINGNESS']}</td>
          </tr>\n";
        }
      }
    ?>
  </tbody>
</table></center>
    <?php
  }
}
}
else{

  $selectSQL = "SELECT * FROM `db1` WHERE `NAME` LIKE '%%' ";
 # Prepare the SELECT Query
  if(isset($_POST['namei']))
  {
    $var2=$_POST['namei'];
    $selectSQL.="AND `NAME` like '%$var2%' ";
  }
  if(!empty($_POST['mobi']))
  {
    $var2=$_POST['mobi'];
    $selectSQL.="AND `MOBILE` like '%$var2%' ";
  }
  if(!empty($_POST['emaili']))
  {
    $var2=$_POST['emaili'];
    $selectSQL.="AND `EMAIL`='$var2' ";
  }
  if(!empty($_POST['qual']))
  {
    $var2=$_POST['qual'];
    if(!(strcmp($var2,"none")==0))
    $selectSQL.="AND `DEGREE`='$var2' ";
  }
  
  if(!empty($_POST['doi']))
  {
    $var2=$_POST['doi'];
    if(!(strcmp($var2,"none")==0))
    {
        if (strcmp($var2,"Others")==0) {
        $selectSQL.="AND `DOMAIN` NOT IN ('Hardware','Software','Management','Research and Developement','Teaching') ";
      }
      else{
    $selectSQL.="AND `DOMAIN`='$var2' ";
  }
  }
  }
  if(!empty($_POST['wrk']))
  {
    $var2=$_POST['wrk'];
    if(!(strcmp($var2,"none")==0)){
      if (strcmp($var2,"Others")==0) {
        $selectSQL.="AND `WORK_INFO` NOT IN ('Government','Corporate','Retired','Entrepreneur') ";
      }
      else{
    $selectSQL.="AND `WORK_INFO`='$var2' ";
  }
  }
  }
  if(!empty($_POST['dei']))
  {
    $var2=$_POST['dei'];
    $selectSQL.="AND `DESIGNATION` like '%$var2%' ";
  }
   if(!empty($_POST['loc']))
  {
    $var2=$_POST['loc'];
    $selectSQL.="AND `LOCATION` like '%$var2%' ";
  }
  if(!empty($_POST['comp']))
  {
    $var2=$_POST['comp'];
    $selectSQL.="AND `EMPLOYER` like '%$var2%' ";
  }
    if(!empty($_POST['gensearch']))
  {
    $var2=$_POST['gensearch'];
    $selectSQL="SELECT * FROM `db1` WHERE `NAME` like '%$var2%' OR `MOBILE` like '%$var2%' OR `EMPLOYER` like '%$var2%' OR `EMAIL` like '%$var2%' OR `DEGREE` like '$var2' OR `DOMAIN` like '$var2' OR `WORK_INFO` like '$var2' OR `DESIGNATION` like '%$var2%' OR `LOCATION` like '%$var2%' OR `EMPLOYER` like '%$var2%' OR `YOJ`like'$var2' OR `YOG`like'$var2' OR BRANCH like '$var2'";
  }
  if(!empty($_POST['yn']))
  {
    $var2=$_POST['yn'];
    if(!(strcmp($var2,"none")==0))
    {
      if (strcmp($var2,"Others")==0) {
        $selectSQL.="AND `WILLINGNESS` NOT IN ('seminars','workshops','placement','recruit','interns','mentors','Not Intrested') ";
      }
      else{
    $selectSQL.="AND `WILLINGNESS` LIKE '%$var2%' ";
  }
  }
  }
  if(!empty($_POST['yr']))
  {
    $var2=$_POST['yr'];
    if(!(strcmp($var2,"none")==0))
    $selectSQL.="AND `YOJ`='$var2' ";
  }
   if(!empty($_POST['yr1']))
  {
    $var2=$_POST['yr1'];
    if(!(strcmp($var2,"none")==0))
    $selectSQL.="AND `YOG`='$var2' ";
  }
  if(!empty($_POST['deps']))
  {
    $var2=$_POST['deps'];
    if(!(strcmp($var2,"none")==0)){
      if (strcmp($var2,"Others")==0) {
        $selectSQL.="AND `BRANCH` NOT IN ('IT','ECE','CSE','MCA','EEE','P.G','Mechanical','Mechatronics','Civil','Architechture','Applied Sciences','Electrical and Instrumentation Engineering') ";
      }
      else{
    $selectSQL.="AND BRANCH='$var2' ";
  }
  }
  }
   //echo "$selectSQL";
  if( !( $selectRes = mysqli_query( $db,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    $rowcount=mysqli_num_rows($selectRes);
    echo "<center>$rowcount results found</center>";
    ?>
<center><table id="alu" >
  <thead >
    <tr>
    <th>S.No.</th>
      <th>Name</th>
      <th>E-mail</th>
      <th>Mob.No.</th>
      <th>Qualification</th>
      <th>Department</th>
      <th>Year of Joining</th>
       <th>Year of Graduation</th>
      <th>Employer</th>
      <th>Designation</th>
      <th>Current location</th>
      <th>Work Information</th>
      <th>Domain or Field of work</th>
      <th>Willingness(To take seminars,lectures etc.)</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['SNO']}</td>
          <td>{$row['NAME']}</td>
          <td>{$row['EMAIL']}</td>
          <td>{$row['MOBILE']}</td>
          <td>{$row['DEGREE']}</td>
          <td>{$row['BRANCH']}</td>
          <td>{$row['YOJ']}</td>
      
          <td>{$row['LOCATION']}</td>
          <td>{$row['DESIGNATION']}</td>
          <td>{$row['DOMAIN']}</td>
        
          </tr>\n";
        }
      }
    ?>
  </tbody>
</table></center>
    <?php
  }
  
}
}

?>
    </div></div></div>
<!-- Aishwarya edited here-->
 <form action='connect_friends.php' method='POST'>
<center>
 <button type="submit" name="friends-search" class="button"> Connect to friends </button>
</center>  
</form>
<!-- Ends here--> 
</div>

<footer><center><img src="hel.png"></center> </footer>
</body>
</html>