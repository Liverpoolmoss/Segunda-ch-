<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title> Formulário </title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


    <link rel="stylesheet" href="../../assets/css/style.css">


</head>

<body>

    <div id="logo">
      <a href="../../app/views/cadastro.php">
        <img src="../../assets/imagens/logoscc19_2.png">
       </a>
</div>


<div class="form">

    <ul class="tab-group">
        <li class="tab"><a class="form-clicar" href="formulario.php">Formulário</a></li>
        <li class="tab active"><a href="#parecer">Parecer</a></li>
    </ul>


        <div id="parecer">
         <form action="/" method="post">

                        <input name="pedido_segunda_chamada" type="radio" class='radio' data-value="deferido">   Deferido   <br><br>
                        <input name="pedido_segunda_chamada" type="radio" class='radio' data-value="indeferido">  Indeferido
         </form>
        </div>

    </div> <!-- /form -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>

<script type="text/javascript">
    $('.tab-group li a.form-clicar').click();
</script>

</body>
</html>