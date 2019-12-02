<?php
include 'conexao.php';

$categoria = $_POST['categoria'];
$sql = "INSERT INTO categoria (nomecategoria) VALUES ('$categoria')";

$inserir = mysqli_query($conexao,$sql);

?>


<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<div class="container" id="alertinseriranuncio">
<h4>Categoria Adicionada Com Sucesso!!</h4>
<div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn primary">Ok!</a>
</div>
</div>