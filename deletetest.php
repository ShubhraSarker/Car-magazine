<?php
session_start();
if (!$_SESSION['login'] == "true") {
    header('Location: Login.php');
}
?>
<html>
<head>
<title>Admin Panel</title>
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
    width: 100%;
    border-collapse: collapse;
    height: 30px;
}
th {
    height: 30px;
}

body{
	margin: 50px;
}
</style>
</head>
<center>
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
	        echo "<td>";
	        echo "<img src ='images/" .$row['image']."' 'height='50px', width='40px'>";
	        echo "</td>";
	        echo"<td>".$row['detail']."</td>";
	        echo"<td>".$row['features']."</td>";
	        echo"<td><a href=delete.php?id=".$row['id'].">Delete</a></td>";
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