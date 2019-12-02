<?php

include 'conexao.php';

$id = $_GET['id'];
$nomecategoria = $_GET['nomecategoria'];


$sql = "UPDATE `categoria` SET `nomecategoria`= '$nomecategoria' WHERE id_categoria = $id";



$atualizar = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<div class="container" id="alertinseriranuncio">
    <h4>Categoria Atualizada Com Sucesso!!</h4>
    <div style="padding-top: 20px">
        <a href="listagemcategoria.php" role="button" class="btn btn-sm btn primary">Ok!</a>
    </div>
</div>