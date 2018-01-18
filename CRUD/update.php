<?php
	$id=$_GET['id'];
	$connection= new Mongo();
	$db = $connection->harsh;
	$id = new MongoId($id);
	$mObj = $db->blogger->findOne(array('_id' => $id));
	// echo "<pre>";
	 //print_r($mObj);
?>

<html>
<head>
</head>
<body>
<form action="updatedata.php" method="post">
 <center> <br> <br> <br>
		 <h2>Blogger Master Update</h2>  <br> <br>
  
<table> <tr>
		<td>Blogger_Id:- </td>
		<td><input name="id" type="hidden" value="<?php echo $mObj['_id'] ?>"/> </td> </tr>
		<tr>
		<td>Name:- </td>
		<td><input name="fname" placeholder="Enter your Full Name" value="<?php echo $mObj['fname'] ?>"/> </td> </tr>
		<tr>
		<td>Email:- </td>
		<td><input name="email" placeholder="Enter your Email- Id" value="<?php echo $mObj['email'] ?>"/></td> </tr>
		<tr>
		<td></td>
		<td><input type="submit" name="Submit" value="Submit"></td> </tr> 
</table>
</form>
</body>
<br> <br> <br>
	<center><h3> Developed By Harshad Patel, The College of Saint Rose</h3></center>

</html>