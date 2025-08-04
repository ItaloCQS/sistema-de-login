<?php
    require("conexao.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <?php
    include("conectar.php");
    include("navbar.php");
  ?>
  <body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mt-2 mb-4 text-center">Login</h4>
                        <form action="conectar.php" method="POST">
                            <div class="mt-3 text-start">
                                <label class="form-label fw-bold">E-mail</label>
                                <input name="email" class="form-control" type="text" placeholder="exemplo@gmail.com">
                            </div>
                            <div class="mt-3 text-start">
                                <label class="form-label fw-bold">Senha</label>
                                <input name="senha" class="form-control" type="text" placeholder="********">
                            </div>
                            <div class="mt-4 mb-3 text-center">
                                <button type="submit" name="conectar-btn" class="btn btn-primary">Iniciar sessão</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>