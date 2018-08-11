<?php
$servername='localhost';
    $username='root';
    $password='';
    $db_name='carmagazine';
    $dbcon=new mysqli($servername,$username,$password,$db_name);

    if(!$dbcon){
    	echo "1";
    }
?>