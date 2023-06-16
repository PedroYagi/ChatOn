<?php
  require_once("inc/config.php");
 ?>
 <?php
 session_start();
  $foto=$_POST['foto'];
  $nick=$_SESSION['nickname'];
  $email=$_SESSION['email'];
  mysqli_query($con,"UPDATE usuarios SET foto='$foto' WHERE email='$email'");
  mysqli_query($con,"UPDATE mensagens SET foto='$foto' WHERE nick='$nick'");
  echo "<script>location.href='chats.php'</script>";
  ?>
