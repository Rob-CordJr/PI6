<?php

include 'conexao.php';

$nroanuncio = $_POST['nroanuncio'];
$nameanuncio = $_POST['nameanuncio'];
$qtddias = $_POST['qtddias'];
$categoria = $_POST['categoria'];

$sql = "INSERT INTO `anuncio`(`nroanuncio`, `nameanuncio`, `qtddias`, `categoria`) VALUES ($nroanuncio,'$nameanuncio',$qtddias,'$categoria')";

$inserir = mysqli_query($conexao,$sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">

<div class="container" id="alertinseriranuncio">
<h4>Promoção Adicionada Com Sucesso!!</h4>
<div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn primary">Ok!</a>
</div>
</div>
