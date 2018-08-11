<?php
require('db.php');
$sql="UPDATE newcar SET model='$_POST[umodel]',image='$_POST[uimage]',detail='$_POST[udetail]',features='$_POST[ufeatures]' WHERE id='$_POST[id]'";
if(mysqli_query($dbcon,$sql)){
    header('location:updatetest.php');
}
else
    echo "Not updated";

?>