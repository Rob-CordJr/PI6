<!DOCTYPE html>
<html>

<head>
    <title>Sistema de Anúncios</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Roberto Cordeiro">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body id="corpo">
    <div class="container " style="margin-top: 80px;">
        <div class="row h-100 align-items-center justify-content-center">

            <div class="col-lg-5 col-md-8 col-sm-10 col-12">
                <form action="_inserir_usuario.php" method="post" id="bsform" class="card shadow px-2 pt-4 border-top-primary rounded-0" >
                    <div class="card-header border-0 bg-white">
                        <h2 class="h4 text-primary text-center m-0 font-weight-bold">Login</h2>
                    </div>
                    <div class="card-body">
                        <div class="form-group my-4">
                            <input class="form-control form-control-lg rounded-0" type="text" name="nome_usuario" required autocomplete="off" placeholder="Nome do Usuario " />
                        </div>

                        <div class="form-group my-4">
                            <input class="form-control form-control-lg rounded-0" type="email" name="email_usuario" required autocomplete="off" placeholder="Email" />
                        </div>
                        <div class="form-group my-4">
                            <input class="form-control form-control-lg rounded-0" id="txtSenha" type="password" name="senha_usuario" required autocomplete="off" placeholder="Senha" />
                        </div>

                        <div class="form-group my-4">
                            <input class="form-control form-control-lg rounded-0" type="password" name="senha2" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)" />
                            <small> A senha precisam ser iguais</small>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nivel de Acesso</label>
                            <select class="form-control" name="nivel_usuario">
                                <option value="1">Administrador</option>
                                <option value="2">Comerciante</option>
                                <option value="3">Usuario</option>
                            </select>
                        </div>

                        <div class="card-footer bg-white border-0 px-0 mt-4">
                            <button type="submit" class="btn btn-lg btn-block btn-primary">Registre-se</button>
                            <p class="text-center mt-3 mb-4 text-secondary">
                                Você está cadastrado?
                                <a class="font-weight-bold" href="login.html">Acesse
                                    Agora</a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/theme-scripts.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script>
    function validaSenha(input){
        if(input.value != document.getElementById('txtSenha').value){
            input.setCustomValidity("Repita a senha corretamente");
        }else{
            input.setCustomValidity('');
        }
    }
    </script>
</body>

</html>