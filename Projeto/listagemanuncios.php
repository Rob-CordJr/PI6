<!DOCTYPE html>
<html>

<head>
  <title>Listagem de Anúncios Cadastrados</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/custom.css">
  <script src="https://kit.fontawesome.com/0c781b11ef.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container" id="stylelista">
    <h3> Lista de Anúncios</h3>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Nro Anúncio</th>
          <th scope="col">Nome do Anúncio</th>
          <th scope="col">Qtd de dias</th>
          <th scope="col">Categoria</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>


      <?php
      include 'conexao.php';
      $sql = "SELECT * FROM `anuncio`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
        $id_anuncio = $array['id_anuncio'];
        $nroanuncio = $array['nroanuncio'];
        $nameanuncio = $array['nameanuncio'];
        $qtddias = $array['qtddias'];
        $categoria = $array['categoria'];

        ?>
        <tr>
          <td> <?php echo $nroanuncio ?></td>
          <td> <?php echo $nameanuncio ?></td>
          <td> <?php echo $qtddias ?></td>
          <td> <?php echo $categoria ?></td>
          <td><a class="btn btn-warning btn-sm" id="btneditar" href="_editar_anuncio.php?id=<?php echo $id_anuncio ?>" role="button"><i class="far fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-sm" id="btneditar" href="_deletar_anuncio.php?id=<?php echo $id_anuncio ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
          </td>

        </tr>
      <?php  } ?>
    </table>
    <div id="botaoform">
        <a href="index.php" role="button"><button type="submit" class="btn btn-primary">Voltar</button></a>
     </div>
  </div>

</body>

</html>