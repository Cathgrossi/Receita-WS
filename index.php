<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Consulta Receita WS</title>
    <style>
        body {
            background-color: #f0f0f0; /* Defina a cor de fundo do corpo */
        }
    </style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #c2c2ed; padding: 15px 0;">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-size: 20px; margin-right: 20px; font-weight: bold; font-family: 'Arial Rounded MT Bold', sans-serif;">Receita WS</a>
            <!-- Adicione os links de navegação com a mesma fonte e estilos -->
            <ul class="navbar-nav ml-auto" style="font-family: 'Arial Rounded MT Bold', sans-serif;">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-weight: bold; letter-spacing: 4px;">API</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;"> <!-- Aumente o espaçamento aqui -->
                    <a class="nav-link" href="#" style="font-weight: bold; letter-spacing: 4px;">Verificar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="d-flex justify-content-center align-items-center vh-100" style="margin-top: 160px;">
    <div class="p-4 rounded" style="background-color: #c2c2ed; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);">
        <h1 class="mb-4" style="font-size: 20px; margin-right: 20px; font-weight: bold; font-family: 'Arial Rounded MT Bold', sans-serif; color: white;">Digite o número do CNPJ</h1>
        <div class="mb-4">
            <input type="text" class="form-control" id="razaoSocial">
        </div>
        <div class="mb-4">
            <!-- Estilize o botão aqui -->
            <a href="./validar.php" class="btn btn-outline-ligh rounded-pill" style="border-color: #d5d5f0; background-color: #d5d5f0; color: #6a6a6a; transition: background-color 0.3s;">
                Gerar Documentos
            </a>
            <a href="./validar.php" class="btn btn-outline-ligh rounded-pill" style="border-color: #d5d5f0; background-color: #d5d5f0; color: #6a6a6a; transition: background-color 0.3s;">
                Validar
            </a>
        </div>
    </div>
</main>
    
</body>
</html>
