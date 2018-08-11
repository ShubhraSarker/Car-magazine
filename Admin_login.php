<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0\dist\css\bootstrap.css">  
    <title> Login Page </title>  
</head>  
<style>  
    .login-panel {  
        margin-top: 150px;
    }
  
</style>  
<body>  
  
<div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
    <div class="row"><!-- row class is used for grid system in Bootstrap-->  
        <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
            <div class="login-panel panel panel-success">  
                <div class="panel-heading">  
                    <h3 class="panel-title">Admin Login </h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action=" ">  
                        <fieldset>    
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="admin_email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="admin_pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="admin_login" >  
  
                        </fieldset>  
                    </form>    
                </div>  
            </div>  
        </div>  
    </div>  
</div>  
  
</body>  
  
</html>   
  
<?php  
require('db.php');  
  
if(isset($_POST['admin_login']))
{  
    $admin_name=$_POST['admin_email'];  
    $admin_pass=$_POST['admin_pass'];  
  
    $admin_query="select * from admin where email='$admin_name' AND password='$admin_pass'";  
  
    $run_query=mysqli_query($dbcon,$admin_query);
    if(mysqli_num_rows($run_query)>0)  
    {  
        header('Location: admin_panel.php');
  
        //echo "<script>window.open('view_users.php','_self')</script>";  
    }  
    else {
        echo"<script>alert('Admin Details are incorrect..!')</script>";

    }  

    }  
  
?> 