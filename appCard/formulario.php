<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percy Jackson</title>
    <style>
        body {
            font-family: "Saira", sans-serif;
            font-size: large;
            background-color: rgb(254, 252, 249);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px; 
            margin: 50px auto; 
            padding: 20px;
            background-color: #618875;
            border-radius: 8px;
            box-shadow: 10px 10px 15px #04553c;
        }

        h3 {
            color: white;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: white;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 1em;
        }

        .btn-primary {
            background-color: #04553c;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
            margin-right: 10px;
        }

        .btn-primary:hover {
            background-color: #03402e;
        }

        .btn-secondary {
            background-color: #618875;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #4e6d5e;
        }

        .fraseEfeito {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-style: italic;
            padding: 10px;
            border-radius: 4px;
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="execucao.php">
            <h3>Gerando cards no universo de Percy Jackson!</h3>
            <div class="form-group">
                <label for="nome">Nome do semideus:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o nome do semideus">
            </div>
            <div class="form-group">
                <label for="parente">Nome do parente divino:</label>
                <input type="text" class="form-control" id="parente" name="parente" placeholder="Informe o nome do parente divino">
            </div>
            <div class="form-group">
                <label for="idade">Idade do semideus:</label>
                <input type="number" class="form-control" id="idade" name="idade" placeholder="Informe a idade do semideus">
            </div>
            <div class="form-group">
                <label for="forca">Força do semideus:</label>
                <input type="number" class="form-control" id="forca" name="forca" placeholder="Informe a força do semideus">
            </div>
            <div class="form-group">
                <label for="link">Link para a imagem do card:</label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Informe um link para a imagem do card">
            </div>
            <div class="form-group">
                <label for="fraseEfeito">Frase de efeito:</label>
                <input type="text" class="form-control" id="fraseEfeito" name="fraseEfeito" placeholder="Digite uma frase de efeito">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="reset" class="btn btn-secondary">Limpar</button>
        </form>
    </div>
</body>
</html>
