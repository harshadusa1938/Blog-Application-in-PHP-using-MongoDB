<?php
	$id=$_GET['id'];
	$connection= new Mongo();
	$db = $connection->harsh;
	$id = new MongoId($id);
    $db->blogger->remove(array('_id' => $id));
		
	header('location:display.php'); 
?>