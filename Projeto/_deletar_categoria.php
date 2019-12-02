<?php

include 'conexao.php';

$id = $_GET['id'];



$sql = "DELETE FROM `categoria` WHERE id_categoria = $id";



$deletar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<div class="container" id="alertinseriranuncio">
    <h4>Categoria excluida Com Sucesso!!</h4>
    <div style="padding-top: 20px">
        <a href="listagemcategoria.php" role="button" class="btn btn-sm btn primary">Ok!</a>
    </div>
</div>