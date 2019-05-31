<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="css/style.css" type="text/css">
    
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
   
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="./js/script.js"></script>
     
   
    

</head>
<body class="container mt-md-2">

<div mb-md-4>
<a href="https://fabrica.tsurt.com.br/public/index.php" > <button class="btn btn-primary mb-md-3"> Voltar </button> </a>
        </div>
        <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>NOME_DA_ESTAMPA</th>
                        <th>CODIGO_DA_ESTAMPA</th>
                      
                       
                       
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>NOME_DA_ESTAMPA</th>
                        <th>CODIGO_DA_ESTAMPA</th>
                       
                    </tr>
                </tfoot>
            </table>

<div id="response">...</div>

<form action="" method="post">


<div class="form-group mt-md-3" >
COR:
<select id="cor" value="CORES" class="mr-md-3">
<option ></option>
<option value="Preto">Preto</option>
<option value="Braco">Branco</option>
<option value="Cinza">Cinza Mescla</option>
</select>
     TIPO:
        <select id="tipo" value="TIPO" class="mr-md-3" required>
        <option ></option>
        <option value="Frente">Frente</option>
        <option value="Costa">Costa</option>
        <option value="Fechado">Fechado</option>
        <option value="Papel">Papel</option>
      

</select>
<!-- PP / P / M / G / GG / XG  -->

TAMANHO:
<select id="tamanho" value="TIPO" class="mr-md-3">
<option ></option>
<option value="PP">PP</option>
<option value="P">P</option>
<option value="M">M</option>
<option value="G">G</option>
<option value="GG">GG</option>
<option value="XG">XG</option>


</select>



SEXO:
<select id="sexo"  class="mr-md-3">
<option ></option>
<option value="MASCULINO">MASCULINO</option>
<option value="FEMININO">FEMININO</option>
</select>


PRODUTO:
<select id="produto"  class="mr-md-3" >
<option ></option>
<option value="MOLETOM" required>MOLETOM</option>
<option value="CAMISETA" required>CAMISETA</option>
<option value="REGATA" required>REGATA</option>
</select>


LOCAL:
<select id="local"  class="mr-md-3">
<option ></option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
</select>
</div>

ADICIONAL:
<select id="adicional"  class="mr-md-3" required>
<option> </option>
<option value="COMPLETO">COMPLETO</option>
<option value="ESTAMPADO">ESTAMPADO</option>
<option value="BOLSO">BOLSO</option>
<option value="SIMPLES">SIMPLES</option>

</select>
ORDEM:
<input type="text" id="ordem" class="mr-md-3" style="width:50px;">

ALTURA:
<input type="text" id="altura" class="mr-md-3" style="width:50px;">

BUSTO:
<input type="text" id="busto" class="mr-md-3" style="width:50px;">

CAPUZ:
<select id="capuz"  class="mr-md-3" required>
<option> </option>
<option value="LISO">LISO</option>
<option value="ESTAMPADO">ESTAMPADO</option>
</select>


BOLSO:
<select id="bolso"  class="mr-md-3" required>
<option> </option>
<option value="COM BOLSO">COM BOLSO</option>
<option value="SEM BOLSO">SEM BOLSO</option>
</select>

</form>


</body>
</html>