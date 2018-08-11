<?php
require('db.php');
$sql = "DELETE FROM newcar WHERE id ='$_GET[id]'";
if (mysqli_query($dbcon, $sql)) {
	header('Location: deletetest.php');
}
else
	echo "Not Deleted";
?>