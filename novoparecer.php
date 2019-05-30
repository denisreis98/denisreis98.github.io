<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <title>Parecer Enviado com Sucesso</title>
</head>
<style>
.fundo {
    background: url(imagens/test5.jpg) no-repeat center top fixed;

    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
.alert-success{
  width: 50%;
  border-radius: 15px;
  left: 25%;
}
.alert-danger{
  width: 53%;
  border-radius: 15px;
  left: 25%;
}
</style>
<body class = "fundo" background="imagens/test5.jpg" align = "center">
<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = 'usbw';
$banco = 'db_parecerucicontrol';
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
$sql = 'INSERT INTO pareceruci (NProcesso, OrgParecer, ConteudoParecer, Valor_Do_Processo, Tipo_De_Despesa, Licitacao_Parecer, Recomendacao) VALUES ( 
"'.$_REQUEST['nprocesso'].'", 
"'.$_REQUEST['orgparecer'].'", 
"'.$_REQUEST['conteudoparecer'].'", 
"'.$_REQUEST['valorparecer'].'", 
"'.$_REQUEST['despesaparecer'].'", 
"'.$_REQUEST['licitacaoparecer'].'", 
"'.$_REQUEST['recomendacaoparecer'].'")';
if (mysqli_query($conexao, $sql)){
 echo "<div align='center' class='alert alert-success' role='alert' style='text-align:center'>
  <h4 class='alert-heading' align='center'>Parecer Enviado com Sucesso!</h4>
  <p>Obrigado por contribuir com a CONTROL/RN!!</p>
  <hr>
  <p class='mb-0' align='center'>Seu Parecer será analisado e se necessário enviaremos uma resposta para a sua UCI ou seu Orgão!</p>
</div>";
}else{
echo "<div class='alert alert-danger' role='alert' align='center'>
  <h4 class='alert-heading' align='center'>Parecer não Enviado!</h4>
  Não foi possível enviar seu parecer no momento. Por favor, verifique os dados ou <a href='inscrever.html' class='alert-link'>tente novamente</a> mais tarde.
</div>".mysqli_error($conexao);
}
mysqli_close($conexao);
?>
<div align = "center"><a href="teste2parecer.html"><input type="button" name="Voltar" class="btn btn-primary" value="Enviar Novo Parecer"></a>
<a href="listarcorredor.php"><input type="button" name="Voltar" class="btn btn-danger" value="Listar Corredores Cadastrados"></a></div>
</body>