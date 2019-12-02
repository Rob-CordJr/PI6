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
    <h3> Lista de Categorias</h3>
    <br>
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">ID. Categoria</th>
          <th scope="col">Nome da Categoria</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>


      <?php
      include 'conexao.php';
      $sql = "SELECT * FROM `categoria`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {
        $id_categoria = $array['id_categoria'];
        $nomecategoria = $array['nomecategoria'];
      

        ?>
        <tr>
          <td> <?php echo $id_categoria ?></td>
          <td> <?php echo $nomecategoria ?></td>

          <td><a class="btn btn-warning btn-sm" id="btneditar" href="_editar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-edit"></i>Editar</a>
            <a class="btn btn-danger btn-sm" id="btneditar" href="_deletar_categoria.php?id=<?php echo $id_categoria ?>" role="button"><i class="far fa-trash-alt"></i>Excluir</a>
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