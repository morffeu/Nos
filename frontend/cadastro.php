<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/cadastro.css" rel="stylesheet">
    <link rel="stylesheet" href="../estily/boots1.css">
    <link rel="stylesheet" href="../estily/boots2.java">
    <link rel="stylesheet" href="../estily/boots3.java">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<title>Cadastro</title>
</head>

<style>

</style>

<body>
    <div class="box">
        <fieldset>
            <legend><b>Cadastro de Novos Usuarios</b></legend>
        </fieldset>

        <form action="../backend/cadastro.php" method="post">
            <div class="inputbox">
                <label for="nome_completo">Digite seu nome completo</label>
                <br>
                <input type="text" name="nome_user" id="nome_completo">
            </div>
            <br>
            <div class="inputbox">
                <label for="nick_user">Digite seu apelido</label>
                <br>
                <input type="text" name="nick_user" id="nick_user">
            </div>
            <br>
            <div class="inputbox">
                <label for="email">Digite seu email:</Label>
                <br>
                <input type="email" name="email_user" id="email">
            </div>
            <br>
            <div class="inputbox">
                <label for="senha">Digite sua senha</label>
                <br>
                <input type="password" name="senha_user" id="senha">
            </div>
            <br>
            <input type="submit" name="cadastro" value="Criar cadastro">
            <br>
        </form>
        <form action="../frontend/login.php" method="post">
            <input type="submit" name="login" value="Login">
            <br>
    </div>
</body>