<?php
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
}
?>