<h1 style = "text-align:center">Bem vindo Aluno ConCursos</h1>

<form action="login.php" method="post">

    <label class = "badge badge-secondary">Usuario</label>
    <input type="text" name="usuario" placeholder= "Digite o usuario" class= "form-control">
    <br>
    <label class = "badge badge-secondary">Senha</label>
    <input type="password" name= "senha" placeholder= "Digite a senha" class= "form-control">
    <br>
    <input type="submit" value="Entrar" class="btn btn-success">
</form>
<br>
<?php if(isset($_GET['erro'])){ ?> 
    <div class="alert alert-danger" role= "alert">
        Usuario ou senha incorreto!
    </div>
<?php } ?>
