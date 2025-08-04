<?php
    session_start();
    require("conexao.php");


    if(isset($_POST['email']) || isset($_POST['senha'])){
        if(strlen($_POST['email']) == 0){
            echo("Preencha seu email");
        } else if(strlen($_POST['senha']) == 0){
            echo("Preencha sua senha");
        } else {
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $senha = mysqli_real_escape_string($conn, $_POST['senha']);

            $sql = "SELECT * FROM funcionario WHERE email = '$email' AND senha = '$senha'";
            $query = mysqli_query($conn, $sql);
            if(mysqli_num_rows($query) > 0){
                $funcionario = mysqli_fetch_assoc($query);

                $_SESSION['user'] = $funcionario['id'];
                $_SESSION['nome'] = $funcionario['email'];

                header("location: login.php");
            } else{
                echo("O usuário não foi encontrado!");
            }
        }
    }

?>