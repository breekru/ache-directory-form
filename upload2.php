<?php
//This function separates the extension from the rest of the file name and returns it
$errors= array();

function findexts ($filename)
{
$filename = strtolower($filename) ;
$exts = split("[/\\.]", $filename) ;
$n = count($exts)-1;
$exts = $exts[$n];
return $exts;
}
//This applies the function to our file
$ext = findexts ($_FILES['file']['name']) ;
//This line assigns a random number to a variable. You could also use a timestamp here if you prefer.
//$ran = rand () ;
$ran = $_POST['yourName'];

 //This takes the random number (or timestamp) you generated and adds a . on the end, so it is ready for the file extension to be appended.
$ran2 = $ran.".";

 //This assigns the subdirectory you want to save into... make sure it exists!
$target = "uploads/";

//This combines the directory, the random file name and the extension 
$target = $target . $ran2.$ext;
 if(empty($errors)==true) {
 	move_uploaded_file($_FILES['file']['tmp_name'], $target);
	echo "The file has been uploaded as ".$ran2.$ext;
}else{
	echo "Sorry, there was a problem uploading your file.";
}
?> 