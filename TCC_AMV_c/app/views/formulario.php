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
      <a href="../app/views/cadastro.php">
        <img src="../../assets/imagens/logoscc19_2.png">
       </a>
</div>
<div class="form">

    <ul class="tab-group">
        <li class="tab active"><a class="form-clicar" href="#segundachamada">Formulário</a></li>
        <li class="tab"><a href="parecer.php">Parecer</a></li>
    </ul>

        <div id="segundachamada">
            <h1>Segunda Chamada</h1>

            <form action="../../controllers/cadastrar.php?=cadastrar" method="post">

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            Curso<span class="req">*</span>
                        </label>
                        <input name="curso" type="text" required autocomplete="off" />
                    </div>

                    <div class="field-wrap">
                        <label>
                            Turma<span class="req">*</span>
                        </label>
                        <input name="turma" type="text"required autocomplete="off"/>
                    </div>
                </div>

                <div class="field-wrap">
                    <label>
                        Disciplina <span class="req">*</span>
                    </label>
                    <input name="disciplina" type="text"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Ministrada pelo Professor<span class="req">*</span>
                    </label>
                    <input name="prof" type="text"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Data da Ausência<span class="req">*</span>
                    </label>
                    <input name="dataprova" type="text"required autocomplete="off"/>
                </div>

                <div class="field-wrap">
                    <label>
                        Motivo da Ausência<span class="req">*</span>
                    </label>
                    <input name="motivo" type="text"required autocomplete="off"/>
                </div>

                <div class="field-wrap"> 
                <form action="upload.php" method="POST"
                    enctype="multipart/form-data">
                  <input type="file" name="anexo"><br>
                </form>
                </div>
                
                <button type="submit" class="button button-block" >Enviar</button>

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