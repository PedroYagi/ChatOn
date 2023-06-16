<?php
require_once("inc/config.php");
?>
<?php
  $email=$_POST['email'];
  $motivo=$_POST['motivo'];
  mysqli_query($con,"INSERT INTO ban(email,motivo) VALUES ('$email','$motivo')");
  echo "<script>location.href='ban.html'</script>";
 ?>
