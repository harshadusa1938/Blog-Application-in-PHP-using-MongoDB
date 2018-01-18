<?php
if($_POST)
{
	$connection= new Mongo();
	$db = $connection->harsh;
	$id = new MongoId($_POST['id']);
	$db->blogger->update(
		array('_id'=> $id),
		array('$set'=> array (
					'fname'=>$_POST["fname"],
					'email'=>$_POST["email"]
					)
		)
	);
	header('location:display.php'); 
}	
