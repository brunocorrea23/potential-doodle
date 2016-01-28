<?php
// obtém os valores digitados
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_banco.inc";
$res = mysqli_query($con, "SELECT * FROM usuarios_autorizados where usuario='$usuario' and senha='$senha'");
$linhas = mysqli_num_rows($res);
if($linhas==0)  // testa se a consulta retornou algum registro
{
	echo "<html><body>";
	echo "<p align=\"center\">Você pembou na hora de logar.</p>";
	echo "<p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
	echo "</body></html>";
}
else
{
    setcookie("usuario", $usuario);
    setcookie("senha", $senha);
    // direciona para a página inicial dos usuários cadastrados
    header ("Location: principal.php");
}
mysqli_close($con);
?>

