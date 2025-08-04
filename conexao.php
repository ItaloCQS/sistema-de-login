<?php
$HOST = '';
$USER = '';
$PASSWORD = '';
$DB = '';

if(mysqli_connect($HOST, $USER, $PASSWORD, $DB,)){
    $conn = mysqli_connect($HOST, $USER, $PASSWORD, $DB,);
} else {
    echo("A conexão falhou!");
}

?>