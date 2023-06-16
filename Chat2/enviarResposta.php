<?php
require_once("inc/config.php");
?>
<?php
  $duvida=$_POST['duvida'];
  $resposta=$_POST['resposta'];
  mysqli_query($con,"UPDATE duvidas SET resposta='$resposta' WHERE duvida='$duvida'");
  echo "<script>location.href='Duvidas.html'</script>";
 ?>
