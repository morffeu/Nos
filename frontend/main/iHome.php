<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/iHome.css" rel="stylesheet">
    <title>Card Inserir</title>
</head>

<body>

        <div class="inser card" id="inserir">
            <div class="card-header">
                Inserir Novo Conteudo:
            </div>
            <div class="card-body">
                <form action="../backend/inserir.php" method="post" enctype="multipart/form-data">


                <label> Insira o titulo de sua publicação:
            <br>
            <input type="text" class="titulo" name="titulo" >
            </label>
            <br>
            <br>
            <label> Adicione uma imagem para sua publicação:
            <br>
            <input type="file" class="imagem" name="imagem">
            </label>
            <br>
            <br>
            <label> Escreva o conteúdo de sua publicação:
            <br>
            <textarea type="text" class="conteudo" name="conteudo">
            </textarea>
            </label>
            <br>
            <input class="button" type="submit" name="inserir">
                
                
                </form>
            </div>
        </div>

</body>

</html>