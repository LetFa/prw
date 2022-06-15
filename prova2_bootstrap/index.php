<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Principal</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/menu.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
</head>
<body>
    
    <hr>
    <div class="container">
    <h1>Menu Principal</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active"  href="Cadastro_fluxo_caixa.html">Cadastrar Fluxo de caixa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  href="listar_fluxo_caixa.php">Listar cadastro de Fluxo de caixa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Consulta_fluxo_caixa.html">Consulta Fluxo de Caixa</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="cadastrar" role="tabpanel" aria-labelledby="cadastrar-tab"></div>
            <div class="tab-pane fade" id="listar" role="tabpanel" aria-labelledby="listar-tab"></div>
            <div class="tab-pane fade" id="consulta" role="tabpanel" aria-labelledby="consulta-tab"></div>
        </div>
        </ul>
    </div>
</body>
</html>