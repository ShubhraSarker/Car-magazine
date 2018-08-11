<!DOCTYPE html>
<html>
<head>
<title>Imaage Upload</title>
<style>
    input[type=text], input[type=password], input[type=file] {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
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
body{
    padding: 100px;
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
    Chooce Car Picture<br>
    <input type ="file" name="image" required="">
</div>
<div>
    Add Car Description<br>
    <textarea name ="detail"  cols="60" rows="6" placeholder="say something about this image" required=""> </textarea>
</div>
<div>
    Add Features<br>
    <input type="text" name="features" placeholder="Add Features" required="">
</div>
<div>
<input type="submit" name="upload" value="upload">
</div>
</form>
</center>
</div>
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
