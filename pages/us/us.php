<?php 
require("../../php/config.php");
require("../../php/us.php")
?>		
<link rel="stylesheet" type="text/css" href="pages/us/css/component.css" />
<script src="pages/us/js/modernizr.custom.js"></script>				
  <ul id="og-grid" class="og-grid">
  <?php 
	$q->setFetchMode(PDO::FETCH_NUM);
		while($r = $q->fetch())
		{
			echo "
				<li>
				  	<a href='".mysql_real_escape_string($r[0])."' data-href2='".mysql_real_escape_string($r[1])."' 
					data-href3='".mysql_real_escape_string($r[2])."'  data-largesrc='".mysql_real_escape_string($r[6])."' 
					data-title='".mysql_real_escape_string($r[3]).",".mysql_real_escape_string($r[4])."' 
					data-description='".mysql_real_escape_string($r[5])."'>
						<img src='".mysql_real_escape_string($r[7])."' alt='".mysql_real_escape_string($r[3])."'/>
					</a>
				</li>
				 ";
				 
		}
		$conn = null;
  ?>
      
  </ul>
<script src="pages/us/js/grid.js"></script>

<script>
        Grid.init();
</script>