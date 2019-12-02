<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom.css">
    <script src="https://kit.fontawesome.com/0c781b11ef.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" id="tamanhoContainer">
        <h4> Cadastro de Categoria de Anúncios</h4>
        <form action="_inserir_categoria.php" method="post" id="formstyle">
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" class="form-control" name="categoria" placeholder="Cadastre uma nova categoria">
            </div>


            <div id="botaoform">
                <a href="index.php" role="button"><button type="submit" class="btn btn-primary">Voltar</button></a>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>

        </form>
    </div>
</body>

</html>