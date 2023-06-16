<?php
require_once("inc/config.php");
?>
<?php
  $email=$_POST['email'];
  mysqli_query($con,"INSERT INTO adms(email) VALUES ('$email')");
  echo "<script>location.href='adms.php'</script>";
 ?>
