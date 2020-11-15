<?php
    session_start();
   if(isset($_FILES['image'])){
      $errors= array();
      $family = $_POST['familyName'];
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];

      $path = $_FILES['image']['name'];
      $ext = pathinfo($path, PATHINFO_EXTENSION);

      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      $_SESSION["fname"] = "$file_name";
      $_SESSION["fam"] = "$family";
      $_SESSION["extension"] = "$ext";
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"uploads/".$file_name);
        // echo "Success";
            header("Location: https://www.ache.blkfarms.com/success.php");
            exit;
      }else{
         print_r($errors);
      }
   }
   
  // sleep(30);
   rename("uploads/$file_name","uploads/$family.$ext");
?>
<html>
   <head>
   <title>ACHE Directory Submission</title>
   <link rel="stylesheet" type="text/css" href="ache.css">
   </head>
   <body>
      <div id=container>
      <form action = "" method = "POST" enctype = "multipart/form-data">
         <label for="file"><h1></h1>Please upload your favorite family photo.</h1></label><br>
         <input type = "file" name = "image" /><br>
         <label for="yourName">Family Name:</label><br>
         <input type="textbox" name="familyName" id="yourName" required /><br />
         <br>

         <!--<input type = "submit"/>-->
         <input onclick="this.value='Uploading...'" type="submit" value="Submit" id="myButton1" />
         </div>
         
      </form>
      <div align=center> 
        <h2>After hitting Submit, inactivity on screen is normal while your image uploads. You will be redirected once complete.</h2>
      </div>
   </body>
</html>