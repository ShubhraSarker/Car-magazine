<?php
if($_GET['q'] == 'Search...'){
	header('Location: new.php');
}
if($_GET['q'] !== ''){

$dbcon = mysqli_connect("localhost","root","","");  
mysqli_select_db($dbcon,"carmagazine"); 

?>
<html>
<head>
<script type="text/javascript">
function active(){
var searchBox  = document.getElementById('searchBox');
if(searchBox.value == 'Search'){
 searchBox.value = ''
searchBox.placeholder = 'Search'
  }
}
function inactive(){
var searchBox = document.getElementById('searchBox');

if(searchBox.value == ''){
searchBox.placeholder = ''
searchBox.value = 'Search'

  }
}

</script>
<style type="text/css">

#searchBox {
border: 1px solid #000000;
border-right: none;
font-size: 16px;
padding: 10px;
outline: none;
width:250px;
-webkit-border-top-left-radius: 10px;
-webkit-border-bottom-left-radius: 10px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-bottomleft: 10px;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;

}

#searchButton  {
border: 1px solid #000000;
font-size: 16px;
padding: 10px;
background: #f1d829;
font-weight:bold;
cursor: pointer;
outline: none;
width: 50px;
margin-left: 0px;
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 10px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
}

#searchButton:hover {
background: #f6e049;
} 
body {
font-family: arial;
}
h3{
	
	margin: 20px 0px 0px 0px;
	padding: 0px;
	
}
a{
	color: #000000;
	text-decoration: underline;
}
a:hover{
color: #000000;
text-decoration: none;
}
</style>  
</head>
<body>
<form action="" method="GET" id="searchForm" onsubmit="active();"/>
<input type="text" name="q" id="searchBox" value="" placeholder="Search" maxlength="25"  autocomplete="off" /><input  type="submit" id="searchButton" value="GO"/>
</form>
<?php

if(!isset($_GET['q'])){
	echo '';
}
else{
$q=$_GET['q'];
$query = mysqli_query($dbcon,"SELECT * FROM newcar WHERE title LIKE '%$q%' OR model_no LIKE '%$q%'");
$num_rows = mysqli_num_rows($query);
	?>
	<p><strong><?php echo $num_rows; ?></strong> results for '<?php echo $q; ?>'</p>
	<?php
while($row = mysqli_fetch_array($query)){
	$id = $row['id'];
	$title = $row['title'];
	$model_no = $row['model_no'];
	echo '<h3><a href="'  . $id . '.php">' . $title . '</a></h3>' . $model_no . '<br />';
	}
} 
?>
</body>
</html>
<?php
	}else{
		header('Location: new.php');
	}
?>