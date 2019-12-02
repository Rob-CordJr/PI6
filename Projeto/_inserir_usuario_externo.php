<?php

include 'conexao.php';
include 'script/password.php';

$nome_usuario = $_POST['nome_usuario'];
$email_usuario = $_POST['email_usuario'];
$senha_usuario = $_POST['senha_usuario'];
$status = 'Inativo';


$sql = "INSERT INTO usuario (nome_usuario, email_usuario, senha_usuario, status) VALUES ('$nome_usuario','$email_usuario',sh1('$senha_usuario'),'$status')";



$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<div class="container" id="alertinseriranuncio">
<h4>Úsuario cadastrado com sucesso, esperando aprovação do administrador!</h4>
<div style="padding-top: 20px">
        <a href="login.html" role="button" class="btn btn-sm btn primary">Ok!</a>
</div>
</div>