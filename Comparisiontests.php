<!DOCTYPE html>
<html>
<title>CAR MAGAZINE</title>
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font-awesome.css">
<link rel="stylesheet" href="font-awesome.min.css">

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

.img-set{
  width: 100%;
  position: relative;
}

.caption a{
  position: absolute; 
   top: 454px; 
   width: 400px;
   float: right; 
   padding-left: 20px;
   color: #fff !important;
   text-align: left !important;
   background-color:black;  
    font-family: 'tahoma';  
    font-size:28px;  
    color:white;  
    opacity:0.6; /* transparency */  
    filter:alpha(opacity=60); 
}
.formpadding{
  padding-top: 13px;
}
#searchBox {
border: 1px solid #ffffff;
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
color: black;
margin-left: 235px;
}


#searchButton  {
border: 1px solid #ffffff;
font-size: 16px;
padding: 10px;
background: #f1d829;
font-weight:bold;
cursor: pointer;
outline: none;
width: 50px;
margin-left: 0px;
-webkit-border-top-right-radius: 10px;
-webkit-border-bottom-right-radius: 20px;
-moz-border-radius-topright: 10px;
-moz-border-radius-bottomright: 10px;
border-top-right-radius: 10px;
border-bottom-right-radius: 10px;
float: right;
margin-right: 29px;

}

#searchButton:hover {
background: #ffffff;
} 
body {
}
h3{
  
  margin: 20px 0px 0px 0px;
  padding: 0px;
  
}
a{
  color: #000000;
  text-decoration: blink;
}
a:hover{
color: #000000;
text-decoration: none;

}
.pic{
  width: 300px;
  height: 220px;
  margin-top: 1px;
  margin-left: 1px;
  border: 3px solid white;
  
}
.bord{
    padding: 30px;
    padding-top: 10px;
    padding-bottom: 10px;
    border: 10px #ffffff;
    margin-left: 40px;
    margin-right: 940px;
    background-color: #D3D3D3;

}

</style>
</head>

<body9

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2 ">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right " href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large"> HOME</a>
         
		 <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">REVIEWS<i class="fa fa-angle-down" aria-hidden="true"></i>
</button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">New car reviews</a>
        <a href="#" class="w3-bar-item w3-button">Comparision tests</a>
        <a href="#" class="w3-bar-item w3-button">Used car features</a>
		<a href="#" class="w3-bar-item w3-button">Magazine reviews</a>
      </div>
    </div>
	    <div class="w3-dropdown-hover w3-hide-small">
	    <button class="w3-padding-large w3-button" title="More">NEWS<i class="fa fa-angle-down" aria-hidden="true"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">All news</a>
        <a href="#" class="w3-bar-item w3-button">First official picture</a>
        <a href="#" class="w3-bar-item w3-button">Motor shows&events</a>
		<a href="#" class="w3-bar-item w3-button">Car tech</a>
      </div>
    </div>
	     <div class="w3-dropdown-hover w3-hide-small">
	    <button class="w3-padding-large w3-button" title="More">FEATURES<i class="fa fa-angle-down" aria-hidden="true"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">All features</a>
        <a href="#" class="w3-bar-item w3-button">Car culture</a>
        <a href="#" class="w3-bar-item w3-button">Used car features</a>
		<a href="#" class="w3-bar-item w3-button">Top10s</a>
		<a href="#" class="w3-bar-item w3-button">Videos</a>
      </div>
    </div>
	
	<a href="#" class="w3-bar-item w3-button w3-padding-large">CAR TECH</a>
  <a href="Signup.php" class="w3-bar-item w3-button w3-padding-large">SIGN UP</a>
  <a href="Login.php" class="w3-bar-item w3-button w3-padding-large">LOGIN</a>

        <form action="car.php"  method="GET" id="searchForm" class="formpadding" onsubmit="active();"/>
      <input type="text" name="q" id="searchBox" value="" placeholder="Search" maxlength="25"  autocomplete="on" /><input  type="submit" 
       id="searchButton" value="GO"/>
      </form>

      <?php

if(!isset($_GET['q'])){
  echo '';
}
else{
  
if($_GET['q'] == 'Search...'){
  header('Location: new.php');
}
if($_GET['q'] !== ''){

$dbcon = mysqli_connect("localhost","root","","");  
mysqli_select_db($dbcon,"carmagazine"); 


$q=$_GET['q'];
$query = mysqli_query($dbcon,"SELECT * FROM model WHERE title LIKE '%$q%' OR model_no LIKE '%$q%'");

$num_rows = mysqli_num_rows($query);
  ?>
  <p><strong><?php echo $num_rows; ?></strong> results for '<?php echo $q; ?>'</p>
  <?php
while($row = mysqli_fetch_array($query)){
  $id = $row['id'];
  $title = $row['title'];
  $model_no = $row['model_no'];
  $image = $row['image'];

  echo '<h3><a href="'  . $id . '.php">' . $title . '</a></h3>' . $model_no .'<br />';
  echo "<div id='img_div'>";
    echo "<img src ='w3images/" .$row['image']."'>";
    echo "<p>" .$row['text']. "</p>";
  }
}
} 
?>
    
 </div>
 
</div>

<div class="w3-content" style="max-width:2000px; margin-top: 80px">
<marquee><h2>CAR MAGAZINE</h2></marquee></div>


<?php
  require('db.php');
  $sql="select model,id from newcar";
  $result = mysqli_query($dbcon,$sql);
?>


<div class="w3-row">
  <div class="w3-col.m6 w3-center w3-half">
  <form method="post" action="Comparisiontests.php">
  
  <select name="op1">
  <?php while ($row=mysqli_fetch_array($result)):; ?>
  <option value="<?php echo $row['id']; ?>"><?php echo $row['model']; ?></option>
  <?php endwhile;?>
  </select>
  <input type="submit" name="submit" value="show details"/>
   </form>
   
   <?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['op1'])){
    echo'Field Must Not Be Empty';
  }elseif(!empty($_POST['op1'])){
    require('db.php');
    $cat= $_POST['op1'];
    $sql2="select * from newcar where id=$cat";
  $result1 = mysqli_query($dbcon,$sql2);
  

  
?>
<?php while ($row=mysqli_fetch_array($result1)):; ?>
   <div>
  <figure>
  <img src="images/<?php echo $row['image']; ?>"  class="img-set">
  <figcaption class="caption">
  <a href="Welcome.php" name=""><?php echo $row['model'];?> </a>
  </figcaption>
</figure>
        
   </div>
    <?php endwhile;?>
  <?php 
}else{
  echo'no post';
}
   }
?>
  </div>
  <div class="w3-col.m6 w3-center w3-half">
  <form method="post" action="Comparisiontests.php">
  <select name="op2" >
  <?php
  require('db.php');
  $sql2="select id,model from newcar";
  $result2 = mysqli_query($dbcon,$sql2);
?>
  <?php while ($row3=mysqli_fetch_array($result2)):; ?>
  <option value="<?php echo $row3['id']; ?>"><?php echo $row3['model']; ?></option>
  <?php endwhile;?>
  </select>
   <input type="submit" name="submit" value="show details"/>
 
  </form>
  <?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['op2'])){
    echo'Field Must Not Be Empty';
  }elseif(!empty($_POST['op2'])){
    require('db.php');
    $bat= $_POST['op2'];
    $sql3="select * from newcar where id=$bat";
  $result3 = mysqli_query($dbcon,$sql3);
  
  ?>
  <?php while ($row1=mysqli_fetch_array($result3)):; ?>
   <div>
  <figure>
  <img src="images/<?php echo $row1['image']; ?>"  class="img-set">
  <figcaption class="caption">
  <a href="Welcome.php" name=""><?php echo $row1['model'];?> </a>
  </figcaption>
</figure>
        
   </div>
    <?php endwhile;?>
  <?php 
}else{
  echo'no post';
}
   }
?>
  </div>
</div> 



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