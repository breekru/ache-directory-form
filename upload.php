<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"][""]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}


//<html>
//<meta http-equiv="refresh" content="3;url=http://blkfarm.kindredsistersok.com/master_goat.html" /> 
//<body>



define('DB_NAME', 'blkfarms_ache');
define('DB_USER', 'blkfarms_breekru');
define('DB_PASSWORD', '*Y66rIsd_9hW');
define('DB_HOST', 'localhost');


$servername = "localhost";
$username = "blkfarms_breekru";
$password = "Y66rIsd_9hW";
$dbname = "blkfarms_ache";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



/*$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
  die('Could not connect: ' .mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
  die('Can\'t use ' . DB_Name . ': ' . mysql_error());
}

if (!mysql_query($sql)) {
  die('Error: ' . mysql_error());
}*/
/*
$father = $_POST['father'];
$fphone = $_POST['fphone'];
$focc = $_POST['focc'];
$mother = $_POST['mother'];
$mphone = $_POST['mphone'];
$mocc = $_POST['mocc'];
$address = $_POST['address'];
$email = $_POST['email'];
$hphone = $_POST['hphone'];
$church = $_POST['church'];
$hobbies = $_POST['hobbies'];
$cname = $_POST['cname'];
$cbday = $_POST['cbday'];
$graduatedy = $_POST['graduatedy'];
$graduatedn = $_POST['graduatedn'];
$fileToUpload = $_POST['fileToUpload'];




$sql = "INSERT INTO `ache` (`ID`, `father`, `fphone`, `focc`, `mother`, `mphone`, `mocc`, `address`, `email`, `hphone`, `church`, `hobbies`, `cname`, `cbday`, `graduatedy`, `graduatedn`, `fileToUpload`) VALUES (NULL, '$father', '$fphone', '$focc', '$mother', '$mphone', '$mocc', '$address', '$email', '$hphone', '$church', '$hobbies', '$cname', '$cbday', '$graduatedy', '$graduatedn', '$fileToUpload')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();





//</body>
//</html>

*/
?>