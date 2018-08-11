<?php
require('db.php');
$sql="UPDATE newcar SET model=''$_POST[umodel],image='$_POST[uimage]',detail='$_POST[udetail]' WHERE id='$_POST[id]'";
if(mysqli_query($dbcon,$sql)){
    header(location:update.php);
}
else
    echo "Not updated";

?>