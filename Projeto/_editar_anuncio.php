<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>
<head>
<title>Testando</title>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/custom.css">
</head>

<body>

<div class="container" id= "tamanhoContainer">
<h4>Formulário de Cadastro da sua Promoção</h4>
<form action="_atualizar_anuncio.php" method="post" id="formstyle">
    <?php
    
    $sql = "SELECT * FROM `anuncio` WHERE id_anuncio = $id";
    $buscar = mysqli_query($conexao, $sql);
    
    while($array = mysqli_fetch_array($buscar)){
        $id_anuncio = $array['id_anuncio'];
        $nroanuncio = $array['nroanuncio'];
        $nameanuncio = $array['nameanuncio'];
        $qtddias = $array['qtddias'];
        $categoria = $array['categoria']; 

    ?>
  <div class="form-group">
    <label>Nro Anúncio</label>
    <input type="number" class="form-control" name="nroanuncio" value = "<?php echo $nroanuncio?>" disabled>
  </div>

  <div class="form-group">
    <label>Nome do Anúncio</label>
    <input type="text" class="form-control" name="nameanuncio" value = "<?php echo $nameanuncio?>">
  </div>

  <div class="form-group">
    <label>Qtd de dias do Anúncio</label>
    <input type="text" class="form-control" name="qtddias" value = "<?php echo $qtddias?>">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Categoria</label>
    <select class="form-control" name="categoria" value = "<?php echo $categoria?>">
      <option>Moda Masculina</option>
      <option>Moda Feminina</option>
      <option>Informatica</option>
      <option>Delivery</option>
      <option>Estetica</option>
    </select>
  </div>

  <div id="botaoform">
        <button type="submit" class="btn btn-primary">Atualizar</button>
  </div>
<?php  } ?>
</form>
</div>


</body>
</html>