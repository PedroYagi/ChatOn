<?php
require_once("inc/config.php");
 ?>
 <?php
 $duvida=$_POST['duvida'];
 mysqli_query($con,"DELETE FROM duvidas WHERE duvida='$duvida'");
 echo "<script>location.href='Duvidas.html'</script>";
  ?>
