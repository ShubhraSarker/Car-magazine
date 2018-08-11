<?php
session_start();
if (!$_SESSION['login'] == "true") {
    header('Location: Login.php');
}
?>
<html>
<head>
<title>Update Car Info</title>
<link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>


<body>



<div id="header">
<center><img src="admin-icon.PNG">
<h3> Welcome to Admin Panel |<?php echo $_SESSION['email'];?></h3></center>
</div>

<div id="sidemenu">
 <ul>
    <li><a href="admin_panel.php"> Dashboard </a></li>
    <li><a href="addtest.php"> Add New Car </a></li>
	<li><a href="deletetest.php"> Delete Car </a></li>
	<li><a href="updatetest.php"> Update Post </a></li>
 </ul>	
</div>

<div id="data">
<style type="text/css">
		table {
    width: 80%;
    margin: 80px;
}

th {
    height:50px;
    text-align: left;
}
	</style>
</head>
	<?php
	require('db.php');
	$sql = "SELECT * FROM newcar";
	$record = mysqli_query($dbcon, $sql);


	?>
	<center>
	<table cellspacing="1" border="1">
		<tr>
			<th>Model</th>
			<th>Image</th>
			<th>Detail</th>
			<th>Features</th>
			<th>Submit</th>
		</tr>
		<?php
		while ($row = mysqli_fetch_array($record)) {
			echo "<tr><form action=update.php method = post>";
			echo "<td><input type='text' name='umodel' value='".$row['model']."'></td>";
			//echo "<td><div id='img_div'></td>";
            echo "<td><img src ='images/".$row['image']."'height='100px', width='100px', margin-right: 200px;></td>";
			echo "<td><input type='file' name='uimage'></td>";
			echo "<td><input type='text' name='udetail' value='".$row['detail']."'></td>";
			echo "<td><input type='text' name='ufeatures' value='".$row['features']."'></td>";
			echo "<input type='hidden' name='id' value = '".$row['id']."'>";
			echo "<td> <input type='submit' value='submit' name='submit'></td>";
			echo "</form> </tr>";
		}
		?>
	</table>
	</center>
</div>
<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</body>
</html>