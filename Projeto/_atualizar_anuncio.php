<?php

include 'conexao.php';

$id = $_POST['id'];
$nameanuncio = $_POST['nameanuncio'];
$qtddias = $_POST['qtddias'];
$categoria = $_POST['categoria'];

$sql = "UPDATE `anuncio` SET `nameanuncio`='$nameanuncio',`qtddias`=$qtddias,`categoria`='$categoria' WHERE id_anuncio = $id";



$atualizar = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<div class="container" id="alertinseriranuncio">
<h4>Promoção Atualizada Com Sucesso!!</h4>
<div style="padding-top: 20px">
        <a href="listagemanuncios.php" role="button" class="btn btn-sm btn primary">Ok!</a>
</div>
</div>