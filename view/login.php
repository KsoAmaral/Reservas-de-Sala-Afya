<?php

require_once "config.php";
require_once "../controller/usuarioController.php";

$usuarioController = new UsuarioController();
$errormsg = $usuarioController->autenticarController();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema de Reservas de Salas</title>

<style type="text/css">
body,td,th {
	font-family: "Open Sans", sans-serif;
}
#aviso { background-color:#CE0056; width:458px; height:154px; color:#FFFFFF; font-size:16px; line-height:25px; padding-left:20px; }
</style>
</head>

<body>
<form action="login.php" method="post"  name="Formulario">

<div id="content">

<div id="esquerdo">
<img src="img/labAfya.jpg" view width="478" height="320" />
    <div id="aviso">
    
    <h3>Clique, Informe e Reserve</h3> 
    A forma mais pr&aacute;tica e simples de reservar salas de aula, laborat&oacute;rios e outros espa&ccedil;os.</div>

</div>

<div id="direito">

<br />
<br />
<img src="img\Logo-novo-Afya.png" alt="Sistema de Reservas de Salas de Aula" title="Sistema de Reservas de Salas de Aula" width="220" height="72" />
<br />
<br />

<input type="text" name="email" id="email" placeholder="E-mail"  />
<br />
<br />

<input type="password" name="senha" id="senha" placeholder="Senha" />
<br />
<br />


<input type="submit" name="entrar" value="Entrar" class="btn1" />

</div>
</div>

<div id="rodape">

Seja Bem vindo!  <a href="cadlogin.php">Clique aqui e faca seu cadastro</a>

</div>

</form>
</body>
</html>