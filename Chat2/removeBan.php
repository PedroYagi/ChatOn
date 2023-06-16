<?php
require_once("inc/config.php");
?>
<?php
  $email=$_POST['email'];
  mysqli_query($con,"DELETE FROM ban WHERE email='$email'");
  echo "<script>location.href='ban.html'</script>";
 ?>
