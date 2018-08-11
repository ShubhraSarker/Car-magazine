<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST['op2'])){
    echo'Field Must Not Be Empty';
  }elseif(!empty($_POST['op2'])){
    require('db.php');
    $bat= $_POST['op2'];
    $sql3="select * from newcar where id=$bat";
  $result3 = mysqli_query($dbcon,$sql3);
   printf("Error: %s\n", mysqli_error($dbcon));
    exit();
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
  