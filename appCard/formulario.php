<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.css">
    <title>Percy Jackson</title>
</head>

<body>

    <form method="POST" action="execucao.php">
        <div class="filme">
            <h3>Gerando cards no universo de Percy Jackson!</h1>

                <input type="text" placeholder="Informe o nome do semideus" name="nome">

                <br><br>

                <input type="text" placeholder="Informe o nome do parente divino" name="parente">

                <br><br>

                <input type="number" placeholder="Informe a idade do semideus" name="idade">

                <br><br>

                <input type="text" placeholder="Informe a força do semideus" name="forca">

                <br><br>

                <input type="text" placeholder="Informe um link para a imagem do card" name="link">

                <br><br>

                <input type="text" placeholder="Digite uma frase de efeito" name="fraseEfeito">
                
                <br><br>

                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
        </div>
    </form>
</body>

</html>