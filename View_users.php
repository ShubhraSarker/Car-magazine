<html>  
<?php
session_start();
?>
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0\dist\css\bootstrap.css">
    <title>View Users</title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
  
<div class="table-scrol">  
    <h1 align="center">All the Users</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>User Id</th>  
            <th>User Name</th>  
            <th>User E-mail</th>  
            <th>User Pass</th>  
            <th>Delete User</th>  
        </tr>  
        </thead>  
  
        <?php  
        //print_r($_SESSION);
        include("database/db.php");  
        $user_email = $_SESSION['email'];
        
        $view_users_query="select * from signup where email='$user_email'";  
        $run=mysqli_query($dbcon,$view_users_query); 
  
        while($row=mysqli_fetch_array($run))
        {  
            $user_id=$row[0];  
            $user_name=$row[1];  
            $user_email=$row[5];  
            $user_pass=$row[4];  
  
  
  
        ?>  
  
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $user_id;  ?></td>  
            <td><?php echo $user_name;  ?></td>  
            <td><?php echo $user_email;  ?></td>  
            <td><?php echo $user_pass;  ?></td>  
            <td><a href="update.php"><button class="btn btn-danger">Update</button></a></td> 
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
  
  
</body>  
  
</html>  