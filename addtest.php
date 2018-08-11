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
<h3> Welcome to Admin Panel | <?php echo $_SESSION['email'];?> </h3></center>
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
<style>
    input[type=text], input[type=password], input[type=file] {
    width: 30%;
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 30%;
}
</style>
</head>
<body>
<div id="contentent">
<center>
<form method="post" action=" " enctype="multipart/form-data"> 
<input type="hidden" name="size" value="1000000">
<div>
    <h2>Add Car Model<h2>
    <input type="text" name="model" placeholder="model" required="">
</div>
<div>
   <h2> Chooce Car Picture<h2><br>
    <input type ="file" name="image" required="">
</div>
<div>
    <h2>Add Car Description<h2><br>
    <textarea name="detail" cols="60" rows="6" placeholder="say something about this image" required=""> </textarea>
</div>
<div>
    <h2>Add Features<h2><br>
    <input type="text" name="features" placeholder="Add Features" required="">
</div>
<div>
<input type="submit" name="upload" value="upload">
</div>
</form>
</center>
</div>
</div>
<!--
      ENCODED BY RAMEEZ SAFDAR / For more web and other programmings check out my channel nosgene https://www.youtube.com/channel/UCYbUaMVWujooISm4m7NDIeg
 -->
</body>
</html>
<?php
$msg = " ";
if(isset($_POST['upload'])){
    $target = "images".basename($_FILES['image']['name']);

    $dbcon = mysqli_connect("localhost","root","","carmagazine");

    $model = $_POST['model'];
    $image = $_FILES['image']['name'];
    $text = $_POST['detail'];
    $feature = $_POST['features'];
    $sql = "INSERT INTO newcar (model,image,detail,features) VALUES ('$model', '$image', '$text','$feature')";
    mysqli_query($dbcon,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg =  "image upload succesfully";
        header('Location: admin_panel.php');
    }
    else{
        $msg = "There was a problem uploading image";
    }
}

?>