<?php
require_once("inc/config.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php
    echo "<h1>Usuários Adm:</h1>";
    $sql=mysqli_query($con,"SELECT * FROM adms");
    if (mysqli_num_rows($sql) > 0) {
      while($ln = mysqli_fetch_assoc($sql)){
        $email=$ln['email'];
        echo "<p>".$email."</p>";

        }
    }
    ?>
    <form class="" action="addAdm.php" method="post">
      <p><input type="text" name="email" placeholder="Digite o email para adicionar o Adm..." value=""></p>
      <p><input type="submit" id="botao" name="" value="Dar Adm"></p>
    </form>
    <form class="" action="removeAdm.php" method="post">
      <p><input type="text" name="email" placeholder="Digite o email para remover o Adm..." value=""></p>
      <p><input type="submit" id="botao" name="" value="Tirar Adm"></p>
    </form>
    <form class="" action="chats.php" method="post">
  		<input type="submit" id="botao" name="" value="Voltar">
  	</form>
  </body>
</html>
