<?php


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Cadastrar Curso</title>
    <meta charset="utf-8">
    <link href="/PlataformaDeCursosEmPHP/CSS/style.css" rel="stylesheet" type="text/css" />
    <link href="/PlataformaDeCursosEmPHP/CSS/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/PlataformaDeCursosEmPHP/CSS/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-inverse">
        <a class="navbar-brand" href="#">Home administrativa</a>


        <div class="collapse navbar-collapse pull-right" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <form action="/PlataformaDeCursosEmPHP/Controller/LoginController.php" method="POST">
                        <input type="submit" class="nav-link pull-right" name="deslogar" href="#" value="Sair" />
                    </form>
                </li>
            </ul>

        </div>
    </nav>
    <div class="container">
        <form method="POST" action="/PlataformaDeCursosEmPHP/Controller/CadastroCursoController.php">
            <h3>Informe os dados do curso</h3>
            <div class="input-group ">
                <label>Nome</label>
                <input type="text" required class="form-control input-lg" name="nome" />
            </div>
            <div class="input-group ">
                <label>Duração</label>
                <input type="text" required class="form-control input-lg" name="duracao" />
            </div>
            <div class="input-group ">
                <label>Informe o link de um video do Youtube</label>
                <input type="text" required class="form-control input-lg" name="link" />
            </div>
            <input type="submit" class="btn btn-primary btn-lg" name="salvar" value="Salvar" />
        </form>

    </div>
</body>

</html>