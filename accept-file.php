<?php
$target_dir = "uploads/";
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
if($imageFileType != "ezm") {
    echo "Sorry, only.EZM files are allowed.";
=======
if($imageFileType == "ezm") {
    $target_dir = "uploads/ezm/";
    $uploadOk = 1;
}
if($imageFileType == "bsp") {
    $target_dir = "uploads/maps/";
    $uploadOk = 1;
}
if($imageFileType == "vmf") {
    $target_dir = "uploads/hammer_saves/";
    $uploadOk = 1;
}
if($imageFileType == "pff") {
	//pff = prefab file format
    $target_dir = "uploads/prefabs/";
    $uploadOk = 1;
}
if($imageFileType != "ezm" && $imageFileType != "bsp" && $imageFileType != "vmf" && $imageFileType != "pff") {
    echo "Sorry, the only file formats permitted are: .ezm, .bsp, .vmf, and .pff"
>>>>>>> origin/master
    $uploadOk = 0;
}
// Check file size

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
<<<<<<< HEAD
    echo " Your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.\r\n check out the list of files <a href=\"get_files.php\">here.</a>";
    } 
	else {
        echo "ERROR! There was an error uploading your file.";
    }
}
echo "<link rel=\"stylesheet\" href=\"flat-ui-pro.css\" /> <link rel=\"stylesheet\" href=\"styles.1460675899.css\"/>";
echo "<body style=\"background-color:#D6F8FF;text-align:center;\">";





$dir = '../uploads/uploads';

$scanned_directory = scandir($dir);
echo "<h1>Files</h1>";
foreach ($scanned_directory as $value){
	if ($value != "." && $value != "..") {
		print_r("<h4><a href=\"http://tf2mapper.com/uploads/uploads/$value\">$value</a></h4>");
	}
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
}
>>>>>>> origin/master
?>