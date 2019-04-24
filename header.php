<?php
	include 'lang.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $lang['title']; ?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="shortcut icon" type="image/png" href="src/favicon.png"/>
</head>
<body>
<header>
	<div class="main-container" id="logo">
		<a href="#nav"><img src="src/DH_main.png" class="logo-main" alt=""></a>
		<img src="src/DH_outer.png" class="logo-outer rotate" alt="">
	</div>
	<ul class="nav" id="home">
		<div class="nav-box">
			<li><a href="#home"><?php echo $lang['home']; ?></a></li>
			<li><a href="#about"><?php echo $lang['about']; ?></a></li>
		</div>
		<li><a href="#logo"><img src="src/DH.jpg" id="nav-logo" alt=""></a></li>
		<div class="nav-box">
			<li><a href="#competition"><?php echo $lang['competition']; ?></a></li>
			<li><a href="#contact"><?php echo $lang['contact']; ?></a></li>
		</div>
	</ul>
	<div class="main-container"></div>
</header>