<?php
	require_once("inc/config.php"); // Retorna o arquivo de configurações do site.
		session_start();
		$nick=strip_tags($_SESSION['nickname']);
		$mensagem=htmlspecialchars($_POST['mensagem']);
		$ip=$_SERVER['REMOTE_ADDR'];

if(strlen($mensagem)>0){
			$result = mysqli_query($con,"SELECT foto FROM usuarios  WHERE nome='$nick'");
	    $row = mysqli_fetch_array($result);
	    mysqli_free_result($result);
			$foto=$row[0];
			$sql=mysqli_query($con,"INSERT INTO mensagens (nick,mensagem,ip,foto) VALUES ('$nick','$mensagem','$ip','$foto')")or die(mysql_error());
		}
?>
