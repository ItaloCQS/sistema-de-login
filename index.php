<?php
    include("protect.php");
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>

  <body>
    <?php
       include("navbar.php");
    ?>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">
                            Óla, seja bem-vindo!
                        </h4>
                        <p class="text-center">
                            <strong><?= htmlspecialchars($_SESSION['nome']) ?></strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>