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
.ifr{
  margin-top: 15px;
}
.caption{
  position: absolute; 
   top: 392px; 
   width: 750px; 
   color: #fff;
   text-align: left !important;
   margin-left: 35px;
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
width:200px;
-webkit-border-top-left-radius: 10px;
-webkit-border-bottom-left-radius: 10px;
-moz-border-radius-topleft: 10px;
-moz-border-radius-bottomleft: 10px;
border-top-left-radius: 10px;
border-bottom-left-radius: 10px;
color: black;

margin-left: 19px;

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
float:right;
margin-right:119px;
}

#searchButton:hover {
background: #ffffff;
} 
.img-set{
  width: 750px !important;
  position: relative;
}
.wrapper12{  
    float:left; /* important */  
    position:relative; 
    padding-top:60px;/* important(so we can absolutely position the description div */  
}  
.description{  
    position:absolute; /* absolute position (so we can position it where we want)*/  
    bottom:0px; /* position will be on bottom */  
    left:0px;  
    width:100%;  
    /* styling bellow */  
    background-color:black;  
    font-family: 'tahoma';  
    font-size:15px;  
    color:white;  
    opacity:0.6; /* transparency */  
    filter:alpha(opacity=60); /* IE transparency */  
}  
.description_content{  
    padding:10px;  
    margin:0px;  
}
body {

}
h3{
  
  margin: 20px 0px 0px 0px;
  padding: 0px;
  
}

a{
  color: #ffffff;
  text-decoration: none;
}
a:hover{
color: #ffffff;
text-decoration: none;
}

s
</style>
</head>

<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card-2 ">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right " href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large"> HOME</a>
         
     <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">REVIEWS<i class="fa fa-angle-down" aria-hidden="true"></i>
</button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="NewCarreviews.php" class="w3-bar-item w3-button">New car reviews</a>
        <a href="Comparisiontests.php" class="w3-bar-item w3-button">Comparision tests</a>
        <a href="Usedcarfeatures.php" class="w3-bar-item w3-button">Used car features</a>
    <a href="Magazinereviews.php" class="w3-bar-item w3-button">Magazine reviews</a>
      </div>
    </div>
      <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">NEWS<i class="fa fa-angle-down" aria-hidden="true"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="Allnews.php" class="w3-bar-item w3-button">All news</a>
        <a href="Firstofficialpicture.php" class="w3-bar-item w3-button">First official picture</a>
        <a href="Motorshow&events.php" class="w3-bar-item w3-button">Motor shows&events</a>
        <a href="Cartech.php" class="w3-bar-item w3-button">Car tech</a>
      </div>
    </div>
       <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">FEATURES<i class="fa fa-angle-down" aria-hidden="true"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="Allfeatures.php" class="w3-bar-item w3-button">All features</a>
        <a href="Carculture.php" class="w3-bar-item w3-button">Car culture</a>
        <a href="carfeatures.php" class="w3-bar-item w3-button">Used car features</a>
    <a href="Top10s.php" class="w3-bar-item w3-button">Top10s</a>
    <a href="Vedios.php" class="w3-bar-item w3-button">Videos</a>
      </div>
    </div>
  
  <a href="#" class="w3-bar-item w3-button w3-padding-large">CAR TECH</a>
  <a href="Registration.php" class="w3-bar-item w3-button w3-padding-large">SIGN UP</a>
  <a href="Login.php" class="w3-bar-item w3-button w3-padding-large">USER LOGIN</a>
  <a href="logout.php" class="w3-bar-item w3-button w3-padding-large">LOGOUT</a>

        <form action="car.php"  method="GET" id="searchForm" class="formpadding" onsubmit="active();"/>
      <input type="text" name="q" id="searchBox" value="" placeholder="Search" maxlength="25"  autocomplete="on" /><input  type="submit" 
       id="searchButton" value="GO"/>
      </form>
       <?php
            if(!isset($_GET['q'])){
              echo '';
            }
            else{
            if( $_GET['q'] == 'Search...'){
                header('Location: home.php');
              }
              if($_GET['q'] !== ''){

              $dbcon = mysqli_connect("localhost","root","","");  
              mysqli_select_db($dbcon,"carmagazine"); 
            $query = mysqli_query($dbcon,"SELECT * FROM newcar WHERE model LIKE '$q'");

            $num_rows = mysqli_num_rows($query);
              ?>
              <p><strong><?php echo $num_rows; ?></strong> results for '<?php echo $q; ?>'</p>
              <?php
            while($row = mysqli_fetch_array($query)){
              $id = $row['id'];
              $model = $row['model'];
              $image = $row['image'];
              $detail = $row['detail'];

              echo '<h3>'.$id.'</h3> <br />'  ;
              echo '<h3>'.$model.'</h3> <br />'  ;
              echo "<div id='img_div'>";
              echo "<img src ='images/" .$row['image']."'>";  
              echo '<h3>'.$detail.'</h3> <br />'  ;
              
                 
              }
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