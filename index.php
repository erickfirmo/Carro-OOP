<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Poo Aula 2B</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
            width: 80%;
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
                <label class="col-md-2">Modelo: </label>
                <input type="text" name="modelo" class="form-control campo col-md-10">
                <label class="col-md-2">Cor: </label>
                <input type="text" name="cor" class="form-control campo col-md-10">
                <label class="col-md-2">Ano: </label>
                <input type="text" name="ano" class="form-control campo col-md-10">
                <label class="col-md-2">KMs: </label>
                <input type="text" name="km" class="form-control campo col-md-10">
                <button type="submit" class="btn btn-primary">Enviar</button>           
            </form>
        </div>
        <div class="col-md-3"></div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
