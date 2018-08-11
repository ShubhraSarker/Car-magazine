
<!DOCTYPE html>
<html>
<head>
	<title>Delete Car</title>
	<style type="text/css">
	table {
    width: 100%;
    border-collapse: collapse;
    height: 30px;
}
th {
    height: 30px;
}
tr:hover{background-color:#f5f5f5}

body{
	margin: 50px;
}
</style>
</head>
<center>
<body>
	<table border="2" cellpadding="1" cellspacing="1">
		<tr>
			<h2><th>Model</th><h2>
			<th>Image</th>
			<th>Detail</th>
			<th>Features</th>
			<th>Delete</th>
		</tr>
		<?php
		require('db.php');
		$sql = "SELECT * From newcar";
		$record = mysqli_query($dbcon, $sql);
		while ($row = mysqli_fetch_array($record)) {
			echo"<tr>";
	        echo"<td>".$row['model']."</td>";
	        echo"<td>".$row['image']."</td>";
	        echo"<td>".$row['detail']."</td>";
	        echo"<td>".$row['features']."</td>";
	        echo"<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";
	        }
	    ?>
	</table>
</body>
</center>
</html>