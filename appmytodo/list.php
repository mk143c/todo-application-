<?php
	
	$host="localhost";
	$user="root";
	$pass="";
	$db="appto";

	$con = mysqli_connect($host, $user, $pass, $db);


		$result = mysqli_query($con,"SELECT * FROM myapp");

		

	if (isset($_GET['delete'])) {
	$id = $_GET['del_task'];

	$query= "DELETE FROM myapp WHERE id= $id";
	mysql_select_db('appto');
	$result = $con->query($query);
	header('location: list.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>my todo list</title>
	<link rel="stylesheet" type="text/css" href="todo1.css">
</head>
<body>
	<div class="div11">
		<?php
		if(mysqli_num_rows($result) > 0){
			?>
		<table border="2" class="tab1">
			<thead>
				<tr>
					<th>id</th>
					<th>task</th>
					<th>date</th>
					<th>time</th>
					<th>operation</th>
				</tr>
			</thead>
			<tbody>	
				<?php 
		         $i = 1;
		        while ($row = mysqli_fetch_array($result)) { 
		 	    ?>
				 <tr>
					<td> <?php echo $i; ?></td>
					<td><?php echo $row['task']; ?></td>
					<td><?php echo $row['date']; ?></td>
					<td><?php echo $row['time']; ?></td>
					<td class="delete">
						<a href="list.php?del_task=<?php echo $row['task']; ?>">X</a>
					</td>
				 </tr>
			    <?php 
			    $i++; 
			} 
			?>
			</tbody>	
		</table>
		<?php
	}
	else{
		echo "no result found";
	}
	?>
	</div>
</body>
</html>