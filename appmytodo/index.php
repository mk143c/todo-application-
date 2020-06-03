<!DOCTYPE html>
<html>
<head>
	<title>todo list</title>
	<link rel="stylesheet" type="text/css" href="todo1.css">

</head>
<body background="img.jpg">
	<?php

		include 'db.php';
		if(isset($_POST['submit'])){
			$task = $_POST['task'];
			$date = $_POST['date'];
			$time = $_POST['time'];

			$query = "INSERT INTO myapp (task, date, time) VALUES('$task', '$date', '$time')";
			$result = $con->query($query);

			if($result){
				
			}else{
				echo "not registered".mysqli_error($con);
			}
		}
	?>
	<form action="list.php"><div><button class="btn3">show list</button></div></form><br>
	<form method="POST" action="">

		<div class="h1" id="h1"><h1>TODOs</h1></div>
		<div class="div1">
			<div class="div2">
				<input type="text" name="task" id="todo1" placeholder="enter todo"><br><br>
				<input type="date" name="date" id="todo2">
				<input type="time" name="time" id="todo3">
			</div>
			<br><br>
			<div class="div3">
				<button class="btn1" name="submit" id="btn1" type="submit">add</button>
				<button class="btn2" type="reset"  onclick="document.getElementById('todo').value = ''">clear</button>
			</div>
		</div>
		
	</form>
</body>
</html>