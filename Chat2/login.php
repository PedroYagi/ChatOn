<?php
require_once("inc/config.php");
?>
<?php
  $email=$_POST['email'];
  $senha=$_POST['senha'];
  $sql=mysqli_query($con,"SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'") or die(mysqli_error());
  $row=mysqli_num_rows($sql);
  if($row>0){
    $result = mysqli_query($con,"SELECT nome, id FROM usuarios  WHERE email='$email'");
    $row = mysqli_fetch_array($result);
    mysqli_free_result($result);
    session_start();
    $_SESSION['nickname'] = $row[0];
    $_SESSION['email']=$email;
    $id=$row[0];
    $usuario = $_SESSION['nome'];
    $_SESSION['id'] =$row[1];
    $teste=$_SESSION['id'];
    echo "<script>location.href='chats.php'</script>";
  }
  else{
    echo "<script>location.href='index.html'</script>";
  }

?>
