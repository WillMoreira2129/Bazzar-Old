

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dar seu Lançe</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  
</head>
<body>

<?php require_once "cabecalho.php";?>

    <div class="caixa1">

        <b><h2><p> &nbsp;   Informações do usuario</h2></b><br>

        <p><b>  &nbsp;  &nbsp; Nome:</b> Teilor Rodrigues Frederico</p>

        <div class="num"><p><b>Numero:</b> +55 (43) 99899-9999</p></div>

        <p><b> &nbsp;  &nbsp; CPF: </b> 123.456.789.67</p>

    </div>

         <div class="caixa2">

         <h2> &nbsp; Item para Lance</h2>

            <img src="assets/Katana.jpg" alt="katana" class="IMG1">

        <div class="text1">

            <p>Ainda aberto para lances</p>

            <p>Valor Inicial</p>
            <p><b>R$2000,00</b></p>
    
            <p>Ultimo lance</p>
            <p><b>R$2500,00</b></p>
    
            <p><b>Inicio:</b> 23/02/2025 às 13:00</p>
            <p><b>Inicia:</b> 24/03/2025 às 13:00</p>


            <div class="lance">

                <div class = "text2"><h2>De Seu lance também</h2><br></div>

                <textarea  id="myTextarea" name="mytext" rows="10" cols="50"  placeholder="Digite o valor"></textarea>
            

                <button type="button" class="btn btn-success btn2"><h3>Dar Lance</h3></button>

                </form> 

            </div>
    
        </div>

    </div>

    <div>

        <div class="linha-vertical"></div>

    </div>

<div class="req1">
    <?php
  require_once "rodape.php";
  ?>
  </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>