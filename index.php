<?php
include 'lang.php';
include 'includes/connection.php' 
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		<?php echo $lang['title']; ?>
	</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="src/favicon.png"/>
	<script src="js/main.js"></script>
</head>

<body>
	<div class="footer">
			<div>
			<a href="index.php?lang=no"><img src="https://lipis.github.io/flag-icon-css/flags/4x3/no.svg"></a> |
			<a href="index.php?lang=en"><img src="https://lipis.github.io/flag-icon-css/flags/4x3/us.svg"></a>
			</div>
	</div>
	<header>
		<div class="main-container" id="logo">
			<a href="#nav-logo"><img src="src/DH_main.png" class="logo-main" alt="logo"></a>
			<img src="src/DH_outer.png" class="logo-outer rotate" alt="logo">
		</div>
		<ul class="nav" id="home">
			<div class="nav-box">
				<li>
					<a href="#home">
						<?php echo $lang['home']; ?>
					</a>
				</li>
				<li>
					<a href="#about">
						<?php echo $lang['about']; ?>
					</a>
				</li>
			</div>
			<li><a href="#logo"><img src="src/DH.jpg" id="nav-logo" alt="logo" onClick="openNav()"></a>
			</li>
			<div class="nav-box">
				<li>
					<a href="#competition">
						<?php echo $lang['competition']; ?>
					</a>
				</li>
				<li>
					<a href="#contact">
						<?php echo $lang['contact']; ?>
					</a>
				</li>
			</div>
		</ul>
		<div class="img-container"><img src="https://i.imgur.com/5Hdbd3M.png" id="home-img"></img>
			<?php echo $lang['welcome']; ?>
		</div>
		<div id="arrow-container" data-aos="fade-down"><img src="http://elevweb.akershus-fk.no/~hoth2507/html/Proj2/src/arrow.svg" alt="down arrow" id="arrow">
		</div>
	</header>

	<div class="content-container">
		<div class="tittel" id="about"><?php echo $lang['about']; ?></div>
		<div class='row'>
			<div class="column">
				<div class="img-container"><img src="https://i.imgur.com/QHjAP0L.png" alt="kamp" id="Kamp">
				</div>
			</div>
			<div class="column sentrer flex-column">
				<div class="undertittel" id="sport"><?php echo $lang['our-martial']; ?></div>
				<div class="tekst">
					<?php echo $lang['martial-arts']; ?>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="column">
				<div class="undertittel" id="omsport">
					<?php echo $lang['about-sport']; ?>
				</div>
				<div class="tekst"><?php echo $lang['art-style']; ?>
				</div>
			</div>
			<div class="column">
				<div class="img-container">
					<img src="https://i.imgur.com/iXhiCOb.png" alt="utstyr" id="utstyr">
				</div>
			</div>
		</div>
		<a href="#" class="undertittel" id="Gallery">
          <?php echo $lang['gallery']; ?>
      </a>
	
		<div class="row sentrer">
			<div class="column">
				<div class="img-container">
					<img class="resize-gallery" src="https://i.imgur.com/09ZV7cf.png" alt="Åke">
				</div>
			</div>
			<div class="column">
				<div class="img-container">
					<img class="resize-gallery" src="https://i.imgur.com/2n5poOc.png" alt="Norsk Lag">
				</div>
			</div>
			<div class="column">
				<div class="img-container">
					<img class="resize-gallery" src="https://i.imgur.com/Pe3SIPl.png" alt="Focus">
				</div>
			</div>
		</div>
		<div class="tekst">
			<div id="view-more" onClick="viewMore()"><?php echo $lang['vm']; ?>
			</div>
		</div>
		<div id="galleri">
			<div class="row sentrer">
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/DczGUBs.png" alt="Grr">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/QHjAP0L.png" alt="Whatchah">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/HJxp6Fe.png" alt="Swish">
					</div>
				</div>
			</div>
			<div class="row sentrer">
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/2uoIMSA.jpg" alt="Konkurranse">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/iXhiCOb.png" alt="Utstyr">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/GgGPlGJ.png" alt="1v1">
					</div>
				</div>
			</div>
			<div class="row sentrer">
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/M6A8Etp.png" alt="Hold still while I beat ya">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/E8pKsXz.jpg" alt="MarvelDC">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/yu8GJlu.png" alt="HYAAH">
					</div>
				</div>
			</div>
			<div class="row sentrer">
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/5Hdbd3M.png" alt="CoolBlue">
					</div>
				</div>
				<div class="column">
					<div class="img-container">
						<img class="resize-gallery" src="https://i.imgur.com/jXNOawt.png" alt="MellowYellow">
					</div>
				</div>
			</div>
			<div class="tittel"><?php echo $lang['our-videoes']; ?></div>
			<div class="row">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/2XTH2Gmr2Gs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="row">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/t4ZaDYXRcl8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="row">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/h4WiCcdiaOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="row">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/KLwmfJL2bOc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="row">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/7AX4AULXGUA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="row">
				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/pBpGBNwTl2A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
		<div class="tekst">
			<div id="view-less" onClick="viewLess()"><?php echo $lang['vl']; ?>
			</div>
		</div>
		<div class="undertittel top-margin" id="Trainer"><?php echo $lang['masters']; ?></div>
		<div class="row no-top-margin">
			<div class="column">
				<div class="img-container"><img class="resize yellow-circle" src="https://scontent-arn2-2.xx.fbcdn.net/v/t31.0-8/20626183_10159100994920183_3603108384433587215_o.jpg?_nc_cat=110&_nc_ht=scontent-arn2-2.xx&oh=8333a2133c56ff8fdafba60fa2d3c57f&oe=5D6381CE" alt="kamp">
				</div>
				<div class="flex-end"><?php echo $lang['pableo']; ?></div>
			</div>
			<div class="column">
				<div class="img-container"><img class="resize yellow-circle" src="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-9/58676664_2576310209063406_440484703347146752_n.jpg?_nc_cat=106&_nc_ht=scontent-arn2-2.xx&oh=fcd7e00f9c60fbf23376acdef84f9723&oe=5D5346D3" alt="kamp">
				</div>
				<div class="flex-end"><?php echo $lang['danny']; ?></div>
			</div>
			<div class="column">
				<div class="img-container"><img class="resize yellow-circle" src="https://scontent-arn2-2.xx.fbcdn.net/v/t1.0-9/15621985_10210546670250567_1981896682178598054_n.jpg?_nc_cat=106&_nc_ht=scontent-arn2-2.xx&oh=241dc16fbe7cf27ef9b125567b17d461&oe=5D56A07C" alt="kamp">
				</div>
				<div class="flex-end"><?php echo $lang['siva']; ?></div>
			</div>
		</div>
		<div class="tittel" id="competition"><?php echo $lang['competition']; ?></div>
		<div class='row'>
			<div class="column sentrer flex-column">
				<div class="undertittel" id="gsba-text">GSBA
				</div>
				<div class="tekst">
					<?php echo $lang['GSBA-text']; ?>
				</div>
			</div>
			<div class="column">
				<div class="img-container">
					<img src="https://static.wixstatic.com/media/6e62eb_ade9d31c864bb7723122d35d5e2ed4c1.jpg/v1/fill/w_605,h_702,al_c,q_85,usm_0.66_1.00_0.01/6e62eb_ade9d31c864bb7723122d35d5e2ed4c1.webp" alt="Oof" id="GSBA">
				</div>
			</div>
		</div>
		<div class='row'>
			<div class="column sentrer flex-column">
				<div class="undertittel" id="wekaf-text">WEKAF
				</div>
				<div class="tekst">
					<?php echo $lang['WEKAF-text']; ?>
				</div>
			</div>
			<div class="column">
				<div class="img-container">
					<img src="http://www.wekaf-gb.co.uk/userimages/IMG_2446.JPG" alt="Thud" id="WEKAF">
				</div>
			</div>
		</div>
		<div class="tittel" id="news"><?php echo $lang['news']; ?></div>
		<div class="row">
			<?php 
			$sql = "SELECT Tittel, Innhold, Dato FROM Nyheter ORDER BY Dato DESC LIMIT 3";
			if($results = $conn->query($sql)){
			while($row = $results->fetch_assoc()){
				echo "<div class='column'>
				<h2 class='undertittel'>".$row['Tittel']."</h2>
				<p class='tekst'>".$row['Innhold']."</p>
				</div>";
			}
			}
			?>
		</div>
		<div class="tittel" id="timeplan"><?php echo $lang['schedule']; ?></div>
		<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=100&amp;wkst=2&amp;bgcolor=%23FFFFFF&amp;src=mittnavnerkult%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FStockholm" style="height:70vh;" scrolling="no"></iframe>
		<div class="tittel" id="contact"><?php echo $lang['contact']; ?></div>
		<footer>
			<p class="tekst"><?php echo $lang['contact-text']; ?></p>
			<p class="tekst"><b><a href="mailto:dpehq2011@gmail.com">dpehq2011@gmail.com</a></b></p>
			<p class="tekst"><b><a href="https://www.facebook.com/danny.huertas.54">Facebook</a></b></p>

		</footer>
	</div>
	<div id="mobile-nav">
		<ul id="mobile-navbar-list">
			<a href="#about" class="navlink"><?php echo $lang['about']; ?></a><br>
			<a href="#sport" class="navlink"><?php echo $lang['our-martial']; ?></a><br>
			<a href="#omsport" class="navlink"><?php echo $lang['about-sport']; ?></a><br>
			<a href="#Gallery" class="navlink"><?php echo $lang['gallery']; ?></a><br>
			<a href="#Trainer" class="navlink"><?php echo $lang['masters']; ?></a><br>
			<a href="#competition" class="navlink"><?php echo $lang['competition']; ?></a><br>
			<a href="#gsba-text" class="navlink">GSBA</a><br>
			<a href="#wekaf-text" class="navlink">WEKAF</a><br>
			<a href="#contact" class="navlink"><?php echo $lang['contact']; ?></a><br>
			<div class="navlink" id="closenav" onClick="closeNav()">X</div>
		</ul>
	</div>
</body>
</html>

