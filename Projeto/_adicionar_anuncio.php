<!DOCTYPE html>
<html>

<head>
  <title>Testando</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>

  <div class="container" id="tamanhoContainer">
    <h4>Formulário de Cadastro da sua Promoção</h4>
    <form action="_inserir_anuncio.php" method="post" id="formstyle">
      <div class="form-group">
        <label>Nro Anúncio</label>
        <input type="number" class="form-control" name="nroanuncio" placeholder="Insira o número do anúncio" required>
      </div>

      <div class="form-group">
        <label>Nome do Anúncio</label>
        <input type="text" class="form-control" name="nameanuncio" placeholder="O nome do anúncio" required>
      </div>

      <div class="form-group">
        <label>Qtd de dias do Anúncio</label>
        <input type="text" class="form-control" name="qtddias" required>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">Categoria</label>
        <select class="form-control" name="categoria">
            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM `categoria` order by nomecategoria ASC";
            $busca = mysqli_query($conexao, $sql);
      
            while ($array = mysqli_fetch_array($busca)) {
              $id_categoria = $array['id_categoria'];
              $nomecategoria = $array['nomecategoria'];
            ?>

          <option><?php echo $nomecategoria ?></option>
          <?php }?>
        </select>
      </div>

      <div id="botaoform">
        <a href="index.php" role="button"><button type="submit" class="btn btn-primary">Voltar</button></a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>

    </form>
  </div>


</body>

</html>