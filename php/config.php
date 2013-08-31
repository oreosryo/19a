<?php
try {
    $host="localhost";
	$db="19a";
	$user="19a";
	$pass="harshit";
	$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/> Please contact webmaster @ harshitladdha93@gmail.com";
    die();
}	
	