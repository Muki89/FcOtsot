<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>FC Otsot</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" href="public/styles/Slidebars-2.0.2/dist/slidebars.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- 	<script type="text/javascript" src="public/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script> -->
	<script type="text/javascript" src="app/scripts/scripts.js"></script>
<!-- 	<link rel="stylesheet" href="public/styles/bootstrap-3.3.7-dist/css/bootstrap.min.css"> -->
	<script type="text/javascript" src="public/styles/Slidebars-2.0.2/dist/slidebars.js"></script>
	<link rel="stylesheet" href="public/styles/css-reset.min.css">
	<link rel="stylesheet" href="public/styles/styles.css">
</head>
<body>
<?php 
	include('app/views/header.php');
	include('app/views/content.php'); 
	include('app/views/footer.php');
?>
	<script src="app/scripts/fastclick-master/lib/fastclick.js"></script>
    <script src="app/scripts/scripts.js"></script>
</body>
</html>