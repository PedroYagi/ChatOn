<?php
require_once("inc/config.php");
?>
<?php
  $duvida=$_POST['duvida'];
  mysqli_query($con,"INSERT INTO duvidas(duvida) VALUES ('$duvida')");
  echo "<script>location.href='Duvidas.html'</script>";
 ?>
