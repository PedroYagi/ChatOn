<?php
require_once("inc/config.php");
session_start();
if (!isset($_SESSION['email'])) {
  echo "<script>location.href='index.html'</script>";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&amp;display=swap" rel="stylesheet">
  </head>
  <body>
    <h1 id="titulo">Escolha um canal para entrar:</h1>
    <div class="fotoPerfil">
      <?php
      $email=$_SESSION['email'];
      $sql=mysqli_query($con,"SELECT foto FROM usuarios WHERE email = '$email'") or die(mysqli_error());
      if (mysqli_num_rows($sql) > 0) {
        while($ln = mysqli_fetch_assoc($sql)){
          $foto=$ln['foto'];
          echo "<img src='$foto' class='perfil' id='fotoPerfil' alt=''>";
        }
      }
       ?>
       <form class="" action="alteraFoto.php" method="post">
         <select name="foto" class="foto" id="foto">
           <option value="imgs/male1.png">1</option>
           <option value="imgs/male2.png">2</option>
           <option value="imgs/male3.png">3</option>
           <option value="imgs/male4.png">4</option>
           <option value="imgs/female1.png">5</option>
           <option value="imgs/female2.png">6</option>
           <option value="imgs/female3.png">7</option>
           <option value="imgs/female4.png">8</option>
           <option value="imgs/interroga.png">9</option>
           <option value="imgs/mykeJake.png">10</option>
         </select>
         <p><input type="submit" id="botao" name="" value="Alterar foto de perfil"></p>
     </form>
    </div>
    <div class="animais">
      <a href="animais.php" id="botao">Animais</a>
    </div>
    <a href="Duvidas.html" id="botao">Dúvidas</a>
    <?php
      $sql=mysqli_query($con,"SELECT * FROM adms WHERE email = '$email'") or die(mysqli_error());
      $row=mysqli_num_rows($sql);
      if($row>0){
        echo '<p><a href="adms.php" id="botao">Adms</a></p>';
        echo '<p><a href="ban.html" id="botao">Bans</a></p>';
      }
      else{
        $sql=mysqli_query($con,"SELECT * FROM ban WHERE email = '$email'") or die(mysqli_error());
        $row=mysqli_num_rows($sql);
        if($row>0){
          echo "<script>location.href='ban.html'</script>";
        }
      }
     ?>
     <script type="text/javascript" src="js/fotoPerfil.js"></script>
  </body>
</html>
