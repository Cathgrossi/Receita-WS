<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <title>Consulta Receita WS</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light py-4">
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#" style="font-size: 24px;">Receita WS <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    
    <main class="my-4">
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                <form>
                    <div class="mb-4">
                        <label for="cnpj" class="form-label">CNPJ:</label>
                        <input type="text" class="form-control" id="cnpj" aria-describedby="cnpjHelp" value="60746948000112">
                    </div>                   
                    <?php
                    require __DIR__.'/vendor/autoload.php';

                    use \App\WebService\ReceitaWS;

                    $obReceitaWS = new ReceitaWS;

                    $cnpj = '90400888000142';

                    $resultado = $obReceitaWS->consultarCNPJ($cnpj);

                    if(empty($resultado)) {
                        die('Problemas ao consultar CNPJ');
                    }

                    if(isset($resultado['error'])) {
                        die($resultado['error']);
                    }
                    ?>

                    <div class="mb-4">
                        <label for="razaoSocial" class="form-label">Razão Social:</label>
                        <input type="text" class="form-control" id="razaoSocial" value="<?php echo $resultado['nome']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="nomeFantasia" class="form-label">Nome Fantasia:</label>
                        <input type="text" class="form-control" id="nomeFantasia" value="<?php echo $resultado['fantasia']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="logradouro" class="form-label">Logradouro:</label>
                        <input type="text" class="form-control" id="logradouro" value="<?php echo $resultado['logradouro']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" class="form-control" id="numero" value="<?php echo $resultado['numero']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="cep" class="form-label">CEP:</label>
                        <input type="text" class="form-control" id="cep" value="<?php echo $resultado['cep']; ?>">
                    </div>
                    <div class="mb-4">
                        <label for="telefone" class="form-label">Telefone:</label>
                        <input type="tel" class="form-control" id="telefone" value="<?php echo $resultado['telefone']; ?>">
                    </div>                    
                </form>
            </div>
        </div>
    </main>

    <footer>
        
    </footer>
</body>
</html>
