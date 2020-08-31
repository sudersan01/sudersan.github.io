<?php
session_start();
if($_SESSION["user"] != "tcealumni1957@gmail.com")
{
    header('Location: signin.php');
}

$host="localhost";
$user="root";
$password="mysql";
$db="alumni";
$con=mysqli_connect($host,$user,$password);
mysqli_select_db($con,$db);
   
  
// Check connection  
if ($con->connect_error) {  
    die("Connection failed: " . $db->connect_error);  
}
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg','gif'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 
            $ab="SELECT COUNT(*) FROM events;";
            $ct=mysqli_query($con,$ab);
            $ct=$ct+0;
            $name=$_POST['input-1'];
            $desc=$_POST['input-2'];
            $query="INSERT INTO events (id,image,uploaded,name,description) VALUES ('".$ct."','".$imgContent."',NOW(),'".$name."','".$desc."');";
            $insert = mysqli_query($con,$query); 
           
             
            if($insert){ 
                $status = 'success'; 

                header("Location: events.php");
    
            
            }else{ 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $statusMsg = 'Please select an image file to upload.'; 
    } 
} 
?>