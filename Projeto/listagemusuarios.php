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
        <h3> Lista de Usuarios</h3>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Nome dos Usuarios</th>
                    <th scope="col">Email</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Nivel</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>


            <?php
            include 'conexao.php';
            $sql = "SELECT * FROM usuario WHERE status = 'Inativo'";
            $busca = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($busca)) {
                $id_usuario = $array['id_usuario'];
                $nome_usuario = $array['nome_usuario'];
                $senha_usuario = $array['senha_usuario'];
                $nivel_usuario = $array['nivel_usuario'];
                ?>
                <tr>
                    <td> <?php echo $id_usuario ?></td>
                    <td> <?php echo $nome_usuario ?></td>
                    <td> <?php echo $qtddias ?></td>
                    <td> <?php echo $senha_usuario ?></td>
                    <td>
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Nivel de Acesso</label>
                                <select class="form-control" name="nivel_usuario">
                                    <option value="1">Administrador</option>
                                    <option value="2">Comerciante</option>
                                    <option value="3">Usuario</option>
                                </select>
                            </div>
                        </form>
                    </td>
                    <td><a class="btn btn-sucess btn-sm" id="btneditar" href="aprovar_usuarios.php?id=<?php echo $id_usuario ?> &nivel=<?php echo $nivel_usuario?> " role="button"><i class="far fa-smile-bean"></i>Aprovar</a>
                        <a class="btn btn-danger btn-sm" id="btneditar" href="excluir_usuarios.php?id=<?php echo $id_usuario ?> &nivel=<?php echo $nivel_usuario?> "role="button"><i class="far fa-trash-alt"></i>Excluir</a>
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