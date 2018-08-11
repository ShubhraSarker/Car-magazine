<!DOCTYPE html>
<html>
<head>
	<title>update record</title>
</head>
<body>
	<?php
	require('db.php');
	$sql = "SELECT * FROM newcar";
	$record = mysqli_query($dbcon, $sql);

	?>
	<table>
		<tr>
			<th>Model</th>
			<th>Image</th>
			<th>Detail</th>
		</tr>
		<?php
		while ($row = mysqli_fetch_array($record)) {
			echo "<tr><form action=update.php method = post>";
			echo "<td><input type=text name=uname value='".$row['model']."'></td>";
			echo "<td><input type=text name=udetail value='".$row['detail']."'></td>";
			echo "<input type=hidden name=id value = '".$row['model']."'>";
			echo "<td input type=submit>";
			echo "</form> </tr>";
		}
		?>
	</table>
</body>
</html>