<?php
$target_dir = "uploads/";
<<<<<<< HEAD
$zipcheck = 0;
=======
>>>>>>> origin/master
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Allow certain file formats
<<<<<<< HEAD
if($imageFileType != "ezm" && $imageFileType != "vmf" && $imageFileType != "bsp" && $imageFileType != "zip") {
    echo "Sorry, only .EZM, .ZIP, .BSP, and .VMF files are allowed.";
    $uploadOk = 0;
}
if($imageFileType == "ezm"){
    $target_dir = "uploads/ezm/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
}
if($imageFileType == "vmf"){
    $target_dir = "uploads/vmf/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
}
if($imageFileType == "bsp"){
    $target_dir = "uploads/bsp/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
}
if($imageFileType == "zip"){
    $target_dir = "uploads/zip/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $zipcheck = 1;
}
// Check file size

if ($_FILES["fileToUpload"]["size"] > 5000000) {
=======
if($imageFileType != "ezm") {
    echo "Sorry, only.EZM files are allowed.";
    $uploadOk = 0;
}
// Check file size

if ($_FILES["fileToUpload"]["size"] > 500000) {
>>>>>>> origin/master
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
<<<<<<< HEAD
    echo " Your file was not uploaded.";
// if everything is ok, try to upload file
} 
else 
{
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
    	if ($zipcheck == 1) 
    	{
    	    $zip = new ZipArchive();
            if($zip->open($target_file) === TRUE )
            {
                 if($zip->locateName('info.txt') !== FALSE)
                 {
                     echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.\r\n check out the list of files <a href=\"get_files.php\">here.</a>";
                 }
                 else 
            	 {
	            echo "Prefab not recognized. Your file was not uploaded.";
	            unlink($target_file);
            	 }  
            }
            else 
            {
                echo "Error reading prefab.";
            	unlink($target_file);
            }  
    	}
        else 
        {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.\r\n check out the list of files <a href=\"get_files.php\">here.</a>";
    	} 
    }
    else 
    {
        echo "ERROR! There was an error uploading your file.";
    }
}

echo "<link rel=\"stylesheet\" href=\"flat-ui-pro.css\" /> <link rel=\"stylesheet\" href=\"styles.1460675899.css\"/>";
echo "<body style=\"background-color:#D6F8FF;text-align:center;\">";

$dir = '../uploads/uploads/ezm';
$scanned_directory = scandir($dir);
echo "<h1>Mapper Saves (.ezm)</h1>";
echo "_______";
foreach ($scanned_directory as $value){
	if ($value != "." && $value != "..") {
		print_r("<h4><a href=\"http://tf2mapper.com/uploads/uploads/ezm/$value\">$value</a></h4>");
	}
}

$dir = '../uploads/uploads/vmf';
$scanned_directory = scandir($dir);
echo "<h1>Hammer Saves (.vmf)</h1>";
echo "_______";
foreach ($scanned_directory as $value){
	if ($value != "." && $value != "..") {
		print_r("<h4><a href=\"http://tf2mapper.com/uploads/uploads/vmf/$value\">$value</a></h4>");
	}
}

$dir = '../uploads/uploads/bsp';
$scanned_directory = scandir($dir);
echo "<h1>Maps (.bsp)</h1>";
echo "_______";
foreach ($scanned_directory as $value){
	if ($value != "." && $value != "..") {
		print_r("<h4><a href=\"http://tf2mapper.com/uploads/uploads/bsp/$value\">$value</a></h4>");
	}
}

$dir = '../uploads/uploads/zip';
$scanned_directory = scandir($dir);
echo "<h1>Prefabs (.zip)</h1>";
echo "_______";
foreach ($scanned_directory as $value){
	if ($value != "." && $value != "..") {
		print_r("<h4><a href=\"http://tf2mapper.com/uploads/uploads/zip/$value\">$value</a></h4>");
	}
=======
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.\r\n check out the list of files <a href=\"uploads/\">here.</a>";
    } 
	else {
        echo "Sorry, there was an error uploading your file.";
    }
>>>>>>> origin/master
}
?>