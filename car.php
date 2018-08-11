<?php
if($_GET['q'] == 'Search...'){
	header('Location: home.php');
}
if($_GET['q'] !== ''){

$dbcon = mysqli_connect("localhost","root","","");  
mysqli_select_db($dbcon,"carmagazine"); 

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font-awesome.css">
<link rel="stylesheet" href="font-awesome.min.css">

<?php

if(!isset($_GET['q'])){
	echo '';
}
else{
$q=$_GET['q'];
$query = mysqli_query($dbcon,"SELECT * FROM newcar WHERE model LIKE '$q'");

$num_rows = mysqli_num_rows($query);
	?>
	<?php
    while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              $model = $row['model'];
              $image = $row['image'];
              $detail = $row['detail'];

              echo '<h3>'.$model.'</h3> <br />'  ;
              echo "<div id='img_div'>";
              echo "<img src ='images/" .$row['image']."'>"; 
              echo '<h3>'.$detail.'</h3> <br />'  ;
                    
              }
} 
?>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i  class="fa fa-facebook-official w3-hover-opacity"></i>
  <i  class="fa fa-instagram w3-hover-opacity"></i>
  <i  class="fa fa-snapchat w3-hover-opacity"></i>
  <i  class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i  class="fa fa-twitter w3-hover-opacity"></i>
  <i  class="fa fa-linkedin w3-hover-opacity"></i>
</footer>
</body>
</html>
<?php
	}else{
		header('Location: .php');
	}
?>