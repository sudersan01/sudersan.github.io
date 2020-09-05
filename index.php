<?php
try{
  $con=new PDO("mysql:host=localhost;dbname=alumni","root","mysql");
}catch(PDOExection $e){
  echo $e->getMessage();
}
$sql="SELECT Location,count(email) from db1 group by Location";
$stmt=$con->prepare($sql);
$stmt->execute();
$arr=$stmt->fetchAll(PDO::FETCH_ASSOC);
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

<link rel="stylesheet" href="sty_gallery.css">   
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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);
      
    function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'No. of Alumnis'],
      <?php foreach($arr as $key=>$val){
      ?>
          ['<?php echo $val['Location']?>', <?php echo $val['count(email)']?>],
      <?php } ?>
        ]);
    
        var options = {};
        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
        chart.draw(data, options);
      }
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







 
  
  
  <div class="container">
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
  

 <nav class="navbar navbar-expand-lg sticky-top ">  
 <a class="navbar-brand nav-link"  href="index.php">Gallery</a>

</nav>

<div class="gallery-image">
  
    <div class="img-box">
  
      <img src="thiagarajar-college-of-engineering-tce-madurai.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>TCE Alumni Association is functioning at the institute and through its chapters spread across the country and abroad.</p>
          <p class="opacity-low"></p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="SCHOLARSHIPS.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Provide scholarships to students at your alma mater.</p>
          <p class="opacity-low"></p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="tcealumnus.png" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Organize reunions, Personality development camps and mentorship programs.</p>
          <p class="opacity-low"></p>
        </div>
      </div>
    </div>

</div>


 <nav class="navbar navbar-expand-lg sticky-top ">  
 <a class="navbar-brand nav-link"  href="index.php">Events</a>

</nav>
<?php
     $aVar = mysqli_connect('localhost','root','mysql');
     mysqli_select_db($aVar,'alumni');
     $projects = array();

     // fetch data from the database
     $records = mysqli_query($aVar,'select id, image,uploaded,name,description from events');
?>



<div class="row text-center" style="display:flex flex-wrap: wrap">
<?php 
    $projects = array();
    while ($project =  mysqli_fetch_assoc($records))
    {
        $projects[] = $project;
    }
    foreach ($projects as $project)
    {
?>
  <div class="col-md-3 col-sm-6">
    <div class="thumbnail">
    <?php
    echo '<img src="data:image/jpeg;base64,'.base64_encode( $project['image'] ).'"/>';
  ?>
  <div class "caption">
    <h3>
    <?php echo $project['name']; ?>
    </h3>
    <h5>Created:<?php echo $project['uploaded']; ?></h5>
    <p><?php echo $project['description']; ?></p>
        <p><a href="#" class="btn btn-primary" role="button">View</a> <a href="#" class="btn btn-danger" role="button">Delete</a></p>
  </div>
</div>
  </div>
  <?php
    }
?>
</div>
</div>
<!--location-begins-->

<nav class="navbar navbar-expand-lg sticky-top "> 
<h2 class="navbar-brand nav-link">Our Alumnis Worldwide</h2>
</nav>
<center>
<div id="regions_div" style="width: 1200px; height: 400px;"></div>
 </center>
<!--location-ends-->
 
 
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