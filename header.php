<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Alunos ConCursos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.css">
    

    <script src="https://kit.fontawesome.com/fd3c04551c.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class = "container">
            <a href="?pagina=home"><img src="img/logo.png" title = "logo" alt="logo"></a>
            <div id="menu">
                <a href="?pagina=cursos"> Cursos </a>
                <a href="?pagina=alunos"> Alunos </a>
                <a href="?pagina=matriculas"> Matriculas </a>
                <?php if(isset($_SESSION['login'])){ ?>
                    <a href="logout.php">
                        <?php echo $_SESSION['usuario']; ?> (sair)
                    </a>
                <?php } ?>
                
            </div>
        </div>
    </header>

    <div id= "conteudo" class = "container">
