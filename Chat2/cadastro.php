<?php
require_once("inc/config.php");
?>
<?php
$nome=$_POST['nome'];
echo "$nome";
$email=$_POST['email'];
echo "$email";
$senha=$_POST['senha'];
echo "$senha";
$reSenha=$_POST['reSenha'];
if ($senha===$reSenha) {
  $sql=mysqli_query($con,"SELECT * FROM usuarios WHERE email = '$email'") or die(mysqli_error());
  $row=mysqli_num_rows($sql);
  if($row>0){
    echo "<script>alert('Email já cadastrado')</script>";
    echo "<script>location.href='Cadastro.html'</script>";
  }
  else{
    $sql=mysqli_query($con,"INSERT INTO usuarios(nome,email,senha,foto) VALUES('$nome','$email','$senha','imgs/interroga.png')");
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['nickname']=$nome;
    echo "<script>location.href='chats.php'</script>";
  }
}
else {
  echo "<script>alert('Senhas não compativeis')</script>";
  echo "<script>location.href='Cadastro.html'</script>";
}
?>
