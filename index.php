<?php
session_start();

?>
<html><head>

<meta charset="utf-8">
    <meta name="description" content="Thiagarajar College of Engineering (TCE)">
<meta name="keywords" content="TCE, Engineering, College">
  <title>Alumni| Thiagarajar College of Engineering - (TCE)</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="HandheldFriendly" content="true">
  <meta name="apple-touch-fullscreen" content="YES">
  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
   
<link rel="stylesheet" type="text/css" href="css/styleindex.css">
<link rel="stylesheet" href="w3.css">
 <link rel="stylesheet" href="css/blog.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link href="css/owl.carousel.min.css" rel="stylesheet">
<!-- java script -->
 <script src="css/script.js" type="text/javascript"></script>
  <script src="js1/jquery.min.js" type="text/javascript"></script>
  <script src="js1/bootstrap.js"></script>
  <script src="js1/bootstrap.bundle.min.js"></script>
  <script src="js1/bootstrap.min.js"></script>
  <script src="js1/popper.min.js"></script>
  <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    </head>



 
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>



<style>

      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    
 .one {
    width: 1024px%;
     //margin-right: 5%;
  height: auto;
   padding: 10px;
    float: left;
}
.one p,li
{
  font-size :16.5;
  line-height :1.75;
  text-decoration: none;
  word-spacing:7.5;
  text-align:justify;
    font-family:Helvetica;
}
   .iframe-container {    
    padding-bottom: 60%;
    padding-top: 30px; height: 0; overflow: hidden;
}
 
.iframe-container iframe,
.iframe-container object,
.iframe-container embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
  
</style> 
<script>
is the plugin
*/
(function(a){a.createModal=function(b){defaults={title:"",message:"Your Message Goes Here!",closeButton:true,scrollable:false};var b=a.extend({},defaults,b);var c=(b.scrollable===true)?'style="max-height: 420px;overflow-y: auto;"':"";html='<div class="modal fade" id="myModal">';html+='<div class="modal-dialog">';html+='<div class="modal-content">';html+='<div class="modal-header">';html+='<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';if(b.title.length>0){html+='<h4 class="modal-title">'+b.title+"</h4>"}html+="</div>";html+='<div class="modal-body" '+c+">";html+=b.message;html+="</div>";html+='<div class="modal-footer">';if(b.closeButton===true){html+='<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>'}html+="</div>";html+="</div>";html+="</div>";html+="</div>";a("body").prepend(html);a("#myModal").modal().on("hidden.bs.modal",function(){a(this).remove()})}})(jQuery);

/*
* Here is how you use it
*/
$(function(){    
    $('.view-pdf').on('click',function(){
        var pdf_link = $(this).attr('href');
        var iframe = '<div class="iframe-container"><iframe src="'+pdf_link+'"></iframe></div>'
        $.createModal({
        title:'My Title',
        message: iframe,
        closeButton:true,
        scrollable:false
        });
        return false;        
    });    
})
</script>
   
  </head>
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
    <a class="nav-link "  href="signin.php"><span>Visit the instituition</span></a>         </li>   
<li class="nav-item">  
   <a class="nav-link "   href="signin.php"><span> Search</span></a>       </li>  
<li class="nav-item"> <button type="button" class="btn" style="color: #830000; Font :Helvetica;font-size:16.8px; font-weight:700;  font-style: normal;
    font-variant: normal;text-transform: uppercase;text-decoration: rgb(131, 0, 0);padding: 3px 12px; height:40px;" data-toggle="modal" data-target="#myModal">
  UserManual</button> </li> 
 <!--<a class="nav-link "   href="User Manual-Alumni.pdf" style="text-decoration:none" target="_top">UserManual</a> --> 

 <!-- Trigger the modal with a button -->
       </ul> 
</div>
     
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
        </div></nav>
    </div>







 
  
  
  <div class="container"
 <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="img-fluid  mx-auto d-block" src="img/1979.jpg">
      <div class="carousel-caption">
        <h3>1979 Batch</h3>    </div>   
    </div>
    <div class="carousel-item">
      <img class="img-fluid  mx-auto d-block" src="img/1994-27-7-19.jpg" >
      <div class="carousel-caption">
        <h3>1994 Batch</h3>     </div>   
    </div>
    <div class="carousel-item">
      <img class="img-fluid  mx-auto d-block" src="img/1.jpg">
      <div class="carousel-caption">
        <h3>Founders Day</h3>  </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
  </div>
  <div class="container">
  
    <br>
  
<div class="card-columns">
  <div class="card">
    <img src="thiagarajar-college-of-engineering-tce-madurai.jpg" class="card-img-top" alt="image not available!!!">
    <div class="card-body">
      <h5 class="card-title">Alumni chapters</h5>
      <p class="card-text">TCE Alumni Association is functioning at the institute and through its chapters spread across the country and abroad.</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Recent happenings....</h5>
      <p class="card-text">lorem ipsum.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="SCHOLARSHIPS.jpg" class="card-img-top" alt="image not available!!!">
    <div class="card-body">
      <h5 class="card-title">Alumni scholarships</h5>
      <p class="card-text">Provide scholarships to students at your alma mater.</p>
    </div>
  </div>
  
  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title">Recent happenings.....</h5>
      <p class="card-text">lorem ipsum.</p>
      <p class="card-text"><small class="text-muted">Last updated 15 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="tcealumnus.png" class="card-img-top" alt="image not available">
    <h5 class="card-title">Alumni programs</h5>
      <p class="card-text">Organize reunions, Personality development camps and mentorship programs.</p>
  </div>
  
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Recent happenings</h5>
      <p class="card-text">lorem ipsum.</p>
      <p class="card-text"><small class="text-muted">Last updated 31 mins ago</small></p>
    </div>
  </div>
</div>

 <nav class="navbar navbar-expand-lg sticky-top ">  
 <a class="navbar-brand nav-link"  href="index.php">Events</a>

</nav>
<br>
<?php
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "mysql";  
$dbName     = "alumni";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
$result = $db->query("SELECT image FROM events WHERE Id=1");
$name= $db->query("SELECT name FROM events WHERE Id=1");
$desc=$db->query("SELECT description FROM events WHERE Id=1");
$time=$db->query("SELECT uploaded FROM events WHERE Id=1");
?>



<div class="card-deck">
  <div class="card">
    <?php while($row = $result->fetch_assoc()){ ?> 
       
    <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" class="card-img-top" alt="image not available !!!">
     <?php } ?>
    <div class="card-body">
      <?php while($row = $name->fetch_assoc()){ ?> 
      <h5 class="card-title"><?php echo($row['name']); ?></h5>
      <?php } ?>
        <?php while($row = $desc->fetch_assoc()){ ?> 
      <p class="card-text"><?php echo($row['description']); ?></p>
         <?php } ?>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">View</a><br><br>
        <?php while($row = $time->fetch_assoc()){ ?> 
      <small class="text-muted">Last updated <?php echo($row['uploaded']); ?></small>
       <?php } ?>
    </div>
  </div>
  <div class="card">
    <img src="alumni-meet.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
        <a href="#" class="btn btn-primary">View</a><br><br>
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="alumni-meet.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
       <a href="#" class="btn btn-primary">View</a><br><br>
      <small class="text-muted">Last updated 15 mins ago</small>
    </div>
  </div>
</div>
</div>



 

 
 
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








 
</body>
</html>