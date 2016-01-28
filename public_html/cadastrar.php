<?php
// obtém os valores digitados
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

// acesso ao banco de dados
include "conecta_banco.inc";
mysqli_query($con, "INSERT INTO usuarios_autorizados (usuario, senha) VALUES ('$usuario', '$senha');");
mysqli_close($con);
echo "<html><head><meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"></head><body>";
echo "<p align=\"center\">Inclusão realizada com sucesso!</p>";
echo "<p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
echo "</body></html>";
?>

