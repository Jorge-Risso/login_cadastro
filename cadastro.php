<?php 
    session_start();
    if(isset($_SESSION['user'])){
        session_destroy();
        header('location: main.php');
        die();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css" media="screen"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">    
    <title>Cadastro</title>
</head>
<body>
    <div class="div1">
        <div class="box col-5 ">
            <h2> Página de Cadastro</h2>
            
            <form class="row col-10" method="POST" action="processa.php?acao=cadastrar">
                <div class="col-10 div 2" class="col-10">
                    <label for="inputAddress" class="form-label">Usuário</label>
                    <input required type="email" class="form-control ajusteInput" id="inputAddress" placeholder="Ex: jorge" name="email">
                </div>
                <div class="col-10">
                    <label  for="inputAddress2" class="form-label">Senha</label>
                    <input required type="password" class="form-control ajusteInput mb-4" id="inputAddress2" placeholder="Digite sua senha" name="senha">
                </div>
                <input type="submit" class="btn btn-success col-8 m-auto mb-2"  value="Cadastrar">
                <a class="btn btn-warning col-8 m-auto mb-2"  href="index.php">Voltar</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
</body>
</html>