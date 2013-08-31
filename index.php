<?php 
require("php/config.php");
require("php/submenu.php");
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>19a | MSRIT Magazine</title>
		<meta name="description" content="19a | Official MSRIT Magazine" />
		<meta name="keywords" content="MSRIT, 19a , Magazine, 19a MSRIT, 19a | MSRIT , M.S.Ramaiah, M.S.Ramaiah magazine" />
		<meta name="author" content="Harshit Laddha" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>        
	</head>
	<body style="min-width:500px">
		<div id="mainMenuView" style="postion:relative">
        	<div class="container">
           
			<ul id="gn-menu" class="gn-menu-main" style="z-index:99;min-width:500px">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul id="sidemenu" class="gn-menu">
                            <?php 
							  $q2->setFetchMode(PDO::FETCH_NUM);
							  while($r = $q2->fetch()){
								  echo "<li><a class='gn-icon ".mysql_real_escape_string($r[0])."'>".mysql_real_escape_string($r[1])."</a></li>";
							  }
							?>                       
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
                <li style="position:static"><img src="images/logo_01.jpg" width="230" height="90" style="z-index:-1" class="logo" ></li>
				<li><a class="us" >Us</a></li>
				<li><a class="home" ><span>Home</span></a></li>
			</ul>
		</div><!-- /container -->
        <div id="homeBody" style="position:relative; top:65px;overflow-y:auto;z-index:1">
        	
        </div>
        
         <script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
				new gnMenu( document.getElementById( 'gn-menu' ) );
				$("#homeBody").load("homegrid.php");
				$(".home").click(function(){
				  $("#homeBody").hide().load("homegrid.php").fadeIn(500);				  
				  document.title= "19a | Official MSRIT Magazine";				  
				});								
				
				$(".us").click(function(){
				  $("#homeBody").hide().load("pages/us/us.php").fadeIn(500);
				  document.title= "19a | The Team";				  
				});
				var $lis = $('#sidemenu').children('li');

				<?php 
					$index=0;
					$q->setFetchMode(PDO::FETCH_NUM);
					while($r = $q->fetch()){
						echo "\$lis.eq(".intval($index).").click(function(){
								\$('#homeBody').hide().load('".mysql_real_escape_string($r[2])."').fadeIn(500);
								document.title='".mysql_real_escape_string($r[3])."';
							});
							";
						$index++;
					}
				?>
		</script>        
	</body>
</html>