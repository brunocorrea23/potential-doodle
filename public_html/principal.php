<?php
include "valida_cookies.inc";
?>
<html>
<head>
<title>SITE BOLADO</title>
</head>
<body>
<h2 align="center">Controle dos usuários autorizados</h2>
<p align="center">Mito: <b><?php echo $_COOKIE["usuario"]; ?></b></p>
<p align="center">Seja bem-vindo! Escolha a opção desejada:</p>

<p align="center">
<font size="4"><b>Clique no que deseja fazer:</b><br>
<a href="incluir.php?tipo=RF"><font size="4">Nada</font></a><br>
<a href="incluir.php?tipo=RV"><font size="4">Fazer nada</font></a><br>
<a href="incluir.php?tipo=DF"><font size="4">Ir para uma pagina em branco</font></a><br>
<a href="incluir.php?tipo=DV"><font size="4">Nenhuma das anteriores</font></a><br>
</font></p>
<hr>
<p align="center">Assine nossa newsletter! Digite seu e-mail abaixo:</p>
<form method="POST" action="gera_email.php">
  <p align="center">E-mail: <input type="text" name="email" size="20"></p>
  <p align="center"><input type="submit" value="Enviar" name="enviar"></p>
</form>

<hr>
<p align="center"><a href="logout.php"><font size="3">Logout</font></a></p>
</body>
</html>
