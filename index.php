<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Qual é a Nave?</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<h1>Qual é a Nave?</h1>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
            <div class="col-md-6 box">
                <form class="formulario" id="formulario">
                    <div class="form-group">
                        <label class="col-md-2 d-none">Modelo </label>
                        <input type="text" name="modelo" class="form-control campo col-md-10" placeholder="Modelo" min="2" max="16" autofocus required>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 d-none">Cor </label>
                        <input type="text" name="cor" class="form-control campo col-md-10" placeholder="Cor" min="2" max="16" required>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 d-none">Ano </label>
                        <select name="ano" class="form-control campo col-md-10" required>

                            <option>Ano</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>

                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>

                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>

                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 d-none">Km's </label>
                        <input type="text" name="km" class="form-control campo col-md-10" placeholder="Km's" required min="1" max="9">
                    </div>
                    <button type="submit" class="btn btn-primary d-block mx-auto">Enviar</button>           
                </form>
            </div>
            <div class="col-md-3"></div>
    </div>
</div>

<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="/node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
    var carro = null;
    $('#formulario').submit(function(event) {
        event.preventDefault()
        var modelo = $('input[name="modelo"]').val()
        var cor = $('input[name="cor"]').val()
        var ano = $('select[name="ano"]').val()
        var km = $('input[name="km"]').val()
        $.ajax({
            method: 'POST',
            url: '/functions.php',
            data: { modelo:modelo, cor:cor, ano:ano, km:km },
        })
        .done(function(response) {
            let list = document.createElement('ul');
            list.className = 'list-group mt-2';
            list.id = 'lista';
            carro = JSON.parse(response);
            box = document.getElementsByClassName('box')[0];
            box.appendChild(list)
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Modelo: '+carro['modelo']+'</li>';
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Cor: '+carro['cor']+'</li>';
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Ano de Fabricação: '+carro['ano_fabricacao']+'</li>';
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Kms Rodados: '+carro['km_rodados']+'</li>';
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Anos de Uso: '+carro['anos_uso']+'</li>';
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Kms por Ano: '+carro['km_ano']+'</li>';
            document.getElementById('lista').innerHTML += '<li class="list-group-item">Paga IPVA: '+carro['pagar_ipva']+'</li>';
        });
    });
</script>
</body>
</html>
