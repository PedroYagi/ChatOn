<?php
require_once("inc/config.php");
?>
<?php
session_start();
$email=$_SESSION['email'];
$adms=mysqli_query($con,"SELECT * FROM adms WHERE email='$email'");
$row=mysqli_num_rows($adms);
$validade=FALSE;
if($row>0){
  $validade=TRUE;
}
if($validade==TRUE){
      echo "<h1>Usuários banidos:</h1>";
      $sql=mysqli_query($con,"SELECT * FROM ban");
      if (mysqli_num_rows($sql) > 0) {
        while($ln = mysqli_fetch_assoc($sql)){
          $email=$ln['email'];
          $motivo=$ln['motivo'];
          echo "<p>".$email.": ".$motivo."</p>";

    }
  }
  echo '<form class="" action="addBan.php" method="post">
    <p><input type="text" name="email" placeholder="Digite o email para banir..." value=""></p>
    <p><textarea name="motivo" placeholder="Digite aquio motivo do banimento..." rows="8" cols="80"></textarea></p>
    <p><input type="submit" id="botao" name="" value="Banir"></p>
  </form>
  <form class="" action="removeBan.php" method="post">
    <p><input type="text" name="email" placeholder="Digite o email para desbanir (?)" value=""></p>
    <p><input type="submit" id="botao" name="" value="Desbanir"></p>
  </form>
  <p><a href="chats.php" id=botao>Voltar</a>';
}
  else{
    $nome=$_SESSION['nickname'];
    $result = mysqli_query($con,"SELECT motivo FROM ban  WHERE email='$email'");
    $row = mysqli_fetch_array($result);
    $motivo=$row[0];
    echo $nome.", você foi banido pelo motivo: ".$motivo;



  }

 ?>
