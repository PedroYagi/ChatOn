<?php
require_once("inc/config.php");
?>
<?php
session_start();
if(isset($_SESSION['email'])){
    $email=$_SESSION['email'];
    $adms=mysqli_query($con,"SELECT * FROM adms WHERE email='$email'");
    $row=mysqli_num_rows($adms);
    $validade=FALSE;
    if($row>0){
      $validade=TRUE;
    }

    $sql=mysqli_query($con,"SELECT * FROM duvidas");
    if (mysqli_num_rows($sql) > 0) {
      while($ln = mysqli_fetch_assoc($sql)){
        $duvida=$ln['duvida'];
        $resposta=$ln['resposta'];
        echo "<p>".$duvida.": ";
        if($resposta!=NULL){
          echo $resposta."</p>";
          if($validade==TRUE){
            echo '<form class="" action="enviarResposta.php" method="post">
                  <textarea name="resposta" placeholder="Alterar resposta..." rows="8" cols="80"></textarea>
                  <p><input type="submit" value="Enviar resposta" id="botao"></p>';
            echo "<input type='hidden' name='duvida' value='$duvida'>";
            echo '</form>';
          }
        }
        else{

          echo "Sem resposta ainda...</p>";
          if($validade==TRUE){
            echo '<form class="" action="enviarResposta.php" method="post">
              <textarea name="resposta" placeholder="Digite aqui a sua resposta..." rows="8" cols="80"></textarea>
              <p><input type="submit" value="Enviar resposta" id="botao"></p>';
              echo "<input type='hidden' name='duvida' value='$duvida'>";
              echo '</form>';
          }
        }
        if($validade==TRUE){
          echo '<form class="" action="apagarDuvida.php" method="post">
          <p><input type="submit" value="Apagar Dúvida" id="botao"></p>';
          echo "<input type='hidden' name='duvida' value='$duvida'>";
          echo '</form>';
        }
      }
    }
}
else{
  $sql=mysqli_query($con,"SELECT * FROM duvidas");
  if (mysqli_num_rows($sql) > 0) {
  while($ln = mysqli_fetch_assoc($sql)){
    $duvida=$ln['duvida'];
    $resposta=$ln['resposta'];
    echo "<p>".$duvida.": ";
    if($resposta!=NULL){
      echo $resposta."</p>";

    }
    else{
      echo "Sem resposta ainda...</p>";
    }
  }
  }
}
 ?>
