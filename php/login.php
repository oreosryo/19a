<?php 
						$sql = "SELECT * FROM recent where categ='msrit';";
						$q   = $conn->query($sql);
						$q->setFetchMode(PDO::FETCH_NUM);
						while($r = $q->fetch()){
						  echo $r[1];
						}
?>

