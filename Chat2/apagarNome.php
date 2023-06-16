<?php
require_once("inc/config.php");
?>
<?php
  $nome=$_POST['nome'];
  mysqli_query($con,"DELETE FROM mensagens WHERE nick='$nome'");
  echo "<script>location.href='animais.php'</script>";
 ?>
