<?php
require_once("inc/config.php");
?>
<?php
  $email=$_POST['email'];
  mysqli_query($con,"DELETE FROM adms WHERE email='$email'");
  echo "<script>location.href='adms.php'</script>";
 ?>
