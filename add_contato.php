<?php

require('config.php');

$nome = $_POST['nome'];
$assu = $_POST['assunto'];
$tel = $_POST['tele'];
$email = $_POST['email'];
$msg = $_POST['mensagem'];

$sql = "INSERT INTO contato (nome,assunto,telefone,email,mensagem) VALUES ('".$nome."','".$assu."','".$tel."','".$email."','".$msg."');";

	$query = mysqli_query($conexao, $sql);
	if ($query) {
		echo "<script>alert('enviado com sucesso');
		location.href = 'index.html';
		</script>";
//enviando mensagem direta para outros quem conecta
	$mensagem = "
<h3>Loja Fashe</h3>
<p>
<b>".$nome."</b>, recebemos seu email, logo entraremos em contato
</p>

";

 $headers[] = 'MIME-Version: 1.0';
 $headers[] = 'Content-type: text/html; charset=utf8';

 mail($to,"Formulario de Contato",$mensagem,$headers);

	}
?>
