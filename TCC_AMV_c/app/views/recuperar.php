<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Recuperar </title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="../../assets/css/style.css">

  
</head>

    <div id="logo">
      <a href="../app/views/cadastro.php">
        <img src="../../assets/imagens/logoscc19_2.png">
       </a>
    </div>

      <div class="form">

         <div id="menu"> <ul class="tab-group">
            <li class="tab"><a href="esqueceu.php">Esqueceu</a></li>
            <li class="tab active"><a href="#rec">Recuperar</a></li>
          </ul></div>


        <div id="rec">   
          <h1>Recuperar sua senha</h1>
          
          <form action="/" method="post">

            <div class="field-wrap">
            <label>
              Digite o codigo <span class="req">*</span>
            </label>
            <input name="codigo" type="text"required autocomplete="off"/>
          </div>

          <h2><button class="button" href="../app/views/login.php">Login</a></h2>
          
          </form>
       </div>  
        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
