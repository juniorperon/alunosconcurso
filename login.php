<?php 

include "db.php";
/*contra hackers
    #md5 = codifica a senha
    #addslashes = adiciona uma / antes de caracteres diferentes.
*/
$usuario = addslashes($_POST['usuario']);
$senha = addslashes($_POST['senha']);

$query = "SELECT * FROM USUARIOS WHERE USUARIO = '$usuario' AND SENHA = '$senha'";

$consulta = mysqli_query($conexao,$query);

if(mysqli_num_rows($consulta) == 1) {

    session_start();
    $_SESSION['login'] = true;
    $_SESSION['usuario'] = $usuario;

    header('location:index.php');
}
else{
    header('location:index.php?erro=1');
}
