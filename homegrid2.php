<?php 
require("php/config.php");
require("php/recent.php")
?><link href="css/hover.css" rel="stylesheet" type="text/css" />
<ul class="rb-grid" id="list">
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>
	<li class="view view-fifth">
        <div class="mask">
        	<h2>Article Name</h2>
            <p>Brief</p>
            <a href="#" class="info">Read More</a>
        </div>
    </li>     
</ul>

<script>
var lis = $('.rb-grid > li');
	<?php $j=0;
	echo "var i = 0;";	
	$q->setFetchMode(PDO::FETCH_NUM);
	while($r = $q->fetch()){
	    echo "$(lis).eq(i).find('h2').html('".mysql_real_escape_string($r[0])."');";
		echo "$(lis).eq(i).find('p').html('".mysql_real_escape_string($r[1])."');";
		$j++;
		echo "i=".intval($j).";";
		
	} ?>



</script>