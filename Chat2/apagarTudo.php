<?php
require_once("inc/config.php");
?>
<?php
  mysqli_query($con,"DELETE FROM mensagens");
  echo "<script>location.href='animais.php'</script>";
 ?>
