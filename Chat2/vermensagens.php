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

		$sql=mysqli_query($con,"SELECT * FROM mensagens");
		if (mysqli_num_rows($sql) > 0) {
			echo '<p>Seja bem vindo '.$_SESSION['nickname'].'</p>';
			while($ln = mysqli_fetch_assoc($sql)){
				$nick=strip_tags($ln['nick']);
				$mensagem=htmlspecialchars($ln['mensagem']);
				$foto=($ln['foto']);
				echo "<p>"."<img src='$foto' style= 'width:25px; height:25px'>".$nick.": ".$mensagem;
				if($validade==TRUE){
					echo " (ID: ".$ln['id'].")</p>";
				}
			}
		} else {
			echo '<p>Seja bem vindo '.$_SESSION['nickname'].'</p><br/>';
			echo "Nenhuma mensagem até o momento.";
		}

		//require_once("inc/nick.php"); // Retorna o arquivo para definir um nick

?>
