<?php
 $connection = new Mongo();
 $db = $connection->harsh;
 $mObj = $db->blogger->find();
?>

<html>
	<head>
	</head>
	<body> <center> <br> <br>
	 <Strong>Blogger List </strong>   <br>
		<br><a href="add.php"> Add </a> 
		<table border="1">
		
			<tr bgcolor="#F6890E">	
			    <td>ID </td>
				<td>Full Name </td>
				<td>Email </td>	  
			</tr>
			<pre>
			<?php
			foreach($mObj as $row)
			{			
				?>
				
			<tr>
				<td><?php echo $row['_id'] ?></td>			
				<td><?php echo $row['fname'] ?></td>
				<td><?php echo $row['email'] ?></td>
				<td><a href="update.php?id=<?php echo $row['_id']; ?>"> Edit </a> </td>
				<td><a href="delete.php?id=<?php echo $row['_id']; ?>"> Delete </a> </td>
			</tr>
			
			<?php 
			  }
			?>
			
		</table>
	 </body> <br> <br> <br>
	<center><Strong> 
	Developed By Harshad Patel, The College of Saint Rose</strong></center></center>
</html>