<?php
require_once("inc/config.php");
?>
<?php
  $id=$_POST['id'];
  mysqli_query($con,"DELETE FROM mensagens WHERE id='$id'");
  echo "<script>location.href='animais.php'</script>";
 ?>
