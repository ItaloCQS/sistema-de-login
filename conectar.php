<?php
    require("conexao.php");

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    if (isset($_POST['conectar-btn'])) {
        $email = trim($_POST['email'] ?? '');
        $senha = trim($_POST['senha'] ?? '');
    

        if (empty($email) || empty($senha)) {
            $_SESSION['login_erro'] = "Por favor, preencha todos os campos.";
            header("Location: index.php");
            exit;
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
                exit;
            } else{
                $_SESSION['login_email'] = $email;
                $_SESSION['login_erro'] = "E-mail ou senha incorretos.";
                header("Location: index.php");
                exit;
            }
        }
    }

?>