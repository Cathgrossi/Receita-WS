<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Consulta Receita WS</title>
    <style>
        body {
            background-color: #f0f0f0; 
        }
        .main-container {
            background-color: #c2c2ed; 
            padding: 20px; 
            border-radius: 10px; 
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2); 
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #c2c2ed; padding: 15px 0;">
        <div class="container">
            <a class="navbar-brand" href="./index.php" style="font-size: 20px; margin-right: 20px; font-weight: bold; font-family: 'Arial Rounded MT Bold', sans-serif;">Receita WS</a>            
            <ul class="navbar-nav ml-auto" style="font-family: 'Arial Rounded MT Bold', sans-serif;">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-weight: bold; letter-spacing: 4px;">API</a>
                </li>
                <li class="nav-item" style="margin-left: 20px;"> 
                    <a class="nav-link" href="#" style="font-weight: bold; letter-spacing: 4px;">Verificar</a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="my-4">
    <div class="container main-container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-6">
                <form method="POST">
                <?php
                    require __DIR__.'/vendor/autoload.php';

                    use \App\WebService\ReceitaWS;

                    $obReceitaWS = new ReceitaWS;

                    $resultado = array(
                        'cnpj' => '',
                        'nome' => '',
                        'fantasia' => '',
                        'status' => '',
                        'logradouro' => '',
                        'numero' => '',
                        'cep' => '',
                        'telefone' => '',
                    );

                    $cnpj = ''; 

                    if(isset($_POST['cnpj'])) {
                        $cnpj = $_POST['cnpj'];

                        $consulta = $obReceitaWS->consultarCNPJ($cnpj);

                        if(isset($consulta['error'])) {
                            die($consulta['error']);
                        }

                        if(!empty($consulta)) {
                            $resultado = $consulta;
                        } else {
                            echo '<div class="alert alert-danger" role="alert">CNPJ não encontrado.</div>';
                        }
                    }
                ?>

                    <div class="mb-4">
                        <label for="cnpj" class="form-label font-weight-bold" style="color: white;">CNPJ:</label>
                        <input type="text" class="form-control" id="cnpj" aria-describedby="cnpjHelp" name="cnpj" value="<?php echo $cnpj; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="razaoSocial" class="form-label font-weight-bold">Razão Social:</label>
                        <input type="text" class="form-control" id="razaoSocial" name="nome" value="<?php echo $resultado['nome']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="nomeFantasia" class="form-label font-weight-bold">Nome Fantasia:</label>
                        <input type="text" class="form-control" id="nomeFantasia" name="fantasia" value="<?php echo $resultado['fantasia']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="statusEmpresa" class="form-label font-weight-bold">Status da Empresa:</label>
                        <input type="text" class="form-control" id="statusEmpresa" name="status" value="<?php echo $resultado['status']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="logradouro" class="form-label font-weight-bold">Logradouro:</label>
                        <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $resultado['logradouro']; ?>">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="mb-4">
                    <label for="numero" class="form-label font-weight-bold">Número:</label>
                    <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $resultado['numero']; ?>">
                </div>
                <div class="mb-4">
                    <label for="cep" class="form-label font-weight-bold">CEP:</label>
                    <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $resultado['cep']; ?>">
                </div>
                <div class="mb-4">
                    <label for="telefone" class="form-label font-weight-bold">Telefone:</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" value="<?php echo $resultado['telefone']; ?>">
                </div>
            </div>
        </div>
    </div>
</main>

</body>
</html>
