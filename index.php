<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<link rel="stylesheet" type="text/css" href="anas.css">
</head>
<body>
	<?php
	require_once "while.php";
	?>
	

	<div class="container-fluid">
		<h1 class="heartBeat animated.delay-2s">Here is Time And Date format</h1> 
		 
		<p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         echo date("D-M-Y H-i-s A",$a);?></p1><br>
         <p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         echo date("M-D-Y H-i-s A",$a);?></p1><br>
         <p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         echo date("D-Y-M H-i-s A",$a);?></p1><br>
         <p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         echo date("Y-D-M H-i-s A",$a);?></p1><br>
         <p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         echo date("D-M-Y i-H-s A",$a);?></p1><br>
         <p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
          echo date("D-M-Y s-H-i A",$a);?></p1><br>
         
         <p1><?php
         date_default_timezone_set('Asia/Kolkata');
         $a = time();
         echo date("D-M-Y H-i-s P",$a);?></p1><br>
		 <p1><?php $a = mktime(10,16,30,8,5,2000);
         echo date("F D, Y H:i:s", $a)?></p1>

	</div>
	<div class="container-fluid1">
		<h1 class="itr">SUPER GLOBALS VARIABLE</h1>
		<p1>Several predefined variables in PHP are "superglobals", which means they are available in all scopes throughout a script. There is no need to do global $variable; to access them within functions or methods.

These superglobal variables are:</p1>
<ul>

	<li class="itm"><a href="https://www.php.net/manual/en/reserved.variables.globals.php">$_GLOBALS</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.server.php">$_SERVER</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.get.php">$_GET</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.post.php">$_POST</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.cookies.php">$_COOKIE</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.session.php">$_SESSION</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.request.php">$_REQUEST</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.environment.php">$_ENV</a></li>
	<li ><a href="https://www.php.net/manual/en/reserved.variables.files.php">$_FILES</a></li>
	
	</div><br>



	<?php
	require_once "footer.php";
	?>

</body>
</html>