<!DOCTYPE html>
<html>
<head>
	<title>Download File using PHP</title>
</head>
<body>

<h2>Download File from HERE : </h2>
<a href="index.php?file=about.html">click HERE</a>



</body>
</html>

<?php 
if(!empty($_GET['file']))
{
	$filename = basename($_GET['file']);
	$filepath =  $filename;
	if(!empty($filename) && file_exists($filepath)){

//Define Headers
		header("Cache-Control: public");
		header("Content-Description: FIle Transfer");
		header("Content-Disposition: attachment; filename=$filename");
		header("Content-Type: application/zip");
		header("Content-Transfer-Emcoding: binary");

		readfile($filepath);
		exit;

	}
	else{
		echo "This File Does not exist.";
	}
}

 ?>