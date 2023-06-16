<?php
	require_once("inc/config.php"); // Retorna o arquivo de configurações do site.
  session_start();
  $email=$_SESSION['email'];
	$adms=mysqli_query($con,"SELECT * FROM adms WHERE email='$email'");
	$row=mysqli_num_rows($adms);
	$validade=FALSE;
	if($row>0){
	  $validade=TRUE;
	}
	$nick=$_SESSION['nickname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat - Logado como <?php echo $nick ?></title>
	<meta charset="utf-8">
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.2.3.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<div class="container">
		<div id="mensagens"></div>
		<form onsubmit="enviar();return false" method="post" action="">
			<input type="text" id="mensagem" placeholder="Digite sua mensagem..." class="form-control">
			<input type="submit" style="display:none">
		</form>
	</div>
	<form class="" action="chats.php" method="post">
		<input type="submit" id="botao" name="" value="Voltar">
	</form>
	<form class="" action="index.html" method="post">
		<input type="submit" id="botao" name="" value="Sair">
	</form>
  <?php
	$id=$_SESSION['id'];;
	$foto=$row[0];
  if($validade==TRUE){
    echo '<form class="" action="apagarId.php" method="post">
            <p><input type="text" placeholder="Digite o id da mensagem para apaga-la." name="id"></p>
            <p><input type="submit" value="Apagar mensagem" id="botao"></p>';
    echo "</form>";
    echo '<form class="" action="apagarNome.php" method="post">
            <p><input type="text" placeholder="Digite o nome do usuário para apagar as mensagens dele." name="nome"></p>
            <p><input type="submit" value="Apagar nome" id="botao"></p>';
    echo "</form>";
    echo '<form class="" action="apagarTudo.php" method="post">
            <p><input type="submit" value="Apagar tudo" id="botao"></p>';
    echo "</form>";
  }
   ?>
</body>
</html>
