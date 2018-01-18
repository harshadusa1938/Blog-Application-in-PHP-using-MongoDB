<?php
if($_POST)
{
	$connection= new Mongo();
	$db = $connection->harsh;
	$rec['fname']= $_POST['fname'];
	$rec['email']= $_POST['email'];
	$db->blogger->insert($rec);
	header('location:display.php'); 
}	
?>