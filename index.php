
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>


</head>
<body onload="carregar()">

<div id="DivInterna">
    <div id="DivRetangular">
        <div id="DivImagem">
            <div id="DivTitulo">X - Bacon</div>
            <div id="DivPreco">R$2,50</div><button>COMPRAR</button>
            <!--<div id="DivDescricao">Descrição</div>-->
        </div><hr>
    </div>


<script>
function carregar(){
//VERBO GET
var URL_TO_FETCH = 'https://api-rest25.herokuapp.com/items/1/'; 
var objeto = {}
fetch(URL_TO_FETCH, { 
  method: 'get',
  headers: { 
        'Content-type': "application/json; charset=UTF-8",
        "Authorization": "Token 9a97310957764540181f11f2ffb4d2f1b75ba9db"
      }, 
})
.then(function(response) { 
  response.text()
  .then(function(result){ 
    objeto = JSON.parse(result) 
    console.log(objeto)
  })
})
.catch(function(err) { console.error(err); });
}
</script>
</body>
</html>
