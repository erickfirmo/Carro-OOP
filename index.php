<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Qual é a Nave?</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/node_module/bootstrap/dist/css/bootstrap.css">
    <style>
        h1 {
            text-align: center;
            margin: 20px auto;
        }

        .formulario {
            margin: 0 auto;
            height: auto;
        }

        .campo {
            width: 100%;
            margin: 5px auto;
        }

        .box {
            border: 4px solid #FFF;
            box-shadow: 1px 1px 2px #696969;
            padding: 30px;
        }

        button.btn.btn-primary {
            width: 20%;
            font-size: 30px;
            margin: 30px auto;
            display: block;
        }
    </style>
</head>
<body>

<h1>Qual é a Nave?</h1>

        <div class="col-md-3"></div>
        <div class="col-md-6 box">
            <form action="functions.php" method="post" class="formulario">
                <div class="form-group">
                    <label class="col-md-2">Modelo: </label>
                    <input type="text" name="modelo" class="form-control campo col-md-10">
                </div>
                <div class="form-group">
                    <label class="col-md-2">Cor: </label>
                    <input type="text" name="cor" class="form-control campo col-md-10">
                </div>
                <div class="form-group">
                    <label class="col-md-2">Ano: </label>
                    <input type="text" name="ano" class="form-control campo col-md-10">
                </div>
                <div class="form-group">
                    <label class="col-md-2">KMs: </label>
                    <input type="text" name="km" class="form-control campo col-md-10">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>           
            </form>
        </div>
        <div class="col-md-3"></div>

<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>
