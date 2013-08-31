<?php 
require("php/config.php");
require("php/recent.php");
?><link href="css/hover.css" rel="stylesheet" type="text/css" />
<ul class="rb-grid" id="list">
	<?php
	$q->setFetchMode(PDO::FETCH_NUM);
	while($r = $q->fetch()){
		echo "
		<li class='view view-fifth'>
			<div class='mask'>
				<h2>".mysql_real_escape_string($r[1])."</h2>
				<p>".mysql_real_escape_string($r[2])."</p>
				<a href='pages\\".mysql_real_escape_string($r[0])."\\".mysql_real_escape_string($r[0]).".php' class='info' > Read More </a>								
			</div>
		</li>
		";
		
	} 
	$conn = null;
	?>
     
</ul>