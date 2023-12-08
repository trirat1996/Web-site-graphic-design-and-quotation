<?php include('./admin/constant/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8" />
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<title>
		<?php 
$sql = "SELECT title FROM manage_website WHERE id = 1";
$result = $connect->query($sql);
foreach ($result as $row) { 
echo $row['title'];}

?></title>
	<link rel="shortcut icon" type="image/x-icon" href="images/theme-mountain-favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700%7CLato:300,400,700' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/core.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

	<link rel="stylesheet" href="css/skin.css" />

	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]  Marquez | Creative Multipurpose HTML5 Template-->

</head>