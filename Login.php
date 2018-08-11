s<html>  
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
                    <h3 class="panel-title">User Login </h3>  
                </div>  
                <div class="panel-body">  
                    <form role="form" method="post" action=" ">  
                        <fieldset>    
                            <div class="form-group">  
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                            </div>  
                            <div class="form-group">  
                                <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                            </div>  
  
  
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="login" >  
  
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
session_start();

if(isset($_POST['login']))  
{  
    $user_pass=$_POST['pass'];  
    $user_email=$_POST['email'];    
  
    if($user_pass=='')  
    {  
        echo"<script>alert('Please enter the password')</script>";  
        exit();  
    }  
  
    if($user_email=='')  
    {  
        echo"<script>alert('Please enter the email')</script>";  
        exit();  
    }  
      $check_email_query="select * from signup";
      $run_query=mysqli_query($dbcon,$check_email_query);

      while ($row=mysqli_fetch_array($run_query)) {
            $db_email = $row["email"];
            $db_password = $row["password"];
            $db_type = $row["type"];

            if ($user_email== $db_email AND $user_pass==$db_password) {
                session_start();
                $_SESSION["email"] = $db_email;
                $_SESSION["type"] = $db_type;
                 $_SESSION['login'] = "true";
               
                if ($_SESSION["type"]=='user') {
                    header('Location:home.php');
                }
                else
                {
                    //$_SESSION['login'] = "Yes";
                    
                    header('Location:admin_panel.php');
                }
            }
        }  
  } 
  
?>  