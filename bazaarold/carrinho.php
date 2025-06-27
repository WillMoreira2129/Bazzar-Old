<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho de Compras</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

  </head>

  <body>

</body>

<?php require_once "cabecalho.php"; ?>

    <main>

      <div class="h1"><h1>Carrinho de Compras</h1></div><br><br><br><br>
      <div class="content">
        <section>

          <table>

            <thead>

              <tr>

                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>-</th>

              </tr>

            </thead>

            <tbody>

              <tr>

                <td>

                  <div class="product">
                    <img src="assets/blue.jpg"alt="" />
                    <div class="info">
                      <div class="name">Nome do produto</div>
                      <div class="category">Categoria</div>

                    </div>

                  </div>

                </td>

                <td>R$ 120</td>
                <td>

                  <div class="qty">
                    <button>+<i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button><b></b>-<i class="bx bx-plus"></i></button>
                  </div>

                </td>


                <td>R$ 240</td>

                <td>
                  <button class="remove"><b>X</b><i class="bx bx-x"></i></button>

                </td>

              </tr>

              <tr>

                <td>

                  <div class="product">
                    <img src="assets/blue.jpg" alt="" />
                    <div class="info">
                      <div class="name">Nome do produto</div>
                      <div class="category">Categoria</div>

                    </div>

                  </div>

                </td>

                <td>R$ 120</td>

                <td>

                  <div class="qty">

                    <button>+<i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button>-<i class="bx bx-plus"></i></button>

                  </div>

                </td>

                <td>R$ 240</td>

                <td>

                  <button class="remove"><b>X</b><i class="bx bx-x"></i></button>

                </td>

              </tr>

              <tr>

                <td>

                  <div class="product">
                    <img src="assets/blue.jpg" alt="" />
                    <div class="info">
                      <div class="name">Nome do produto</div>
                      <div class="category">Categoria</div>

                    </div>

                  </div>

                </td>
                <td>R$ 120</td>

                <td>

                  <div class="qty">
                    <button>+<i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button>-<i class="bx bx-plus"></i></button>
                  </div>

                </td>

                <td>R$ 240</td>
                
                <td>
                  <button class="remove"><b>X</b><i class="bx bx-x"></i></button>

                </td>

              </tr>

            </tbody>

          </table>

        </section>

        <aside>

          <div class="box">
            <header>Resumo da compra</header>
            <div class="info">
              <div><span>Sub-total</span><span>R$ 418</span></div>
              <div><span>Frete</span><span>Gratuito</span></div>
              <div>

                <button>
                  Adicionar cupom de desconto
                  <i class="bx bx-right-arrow-alt"></i>
                </button>               

              </div>

            </div>

            <footer>

              <span>Total</span>

              <span>R$ 418</span>

            </footer>

          </div>

          <button>Finalizar Compra</button>

        </aside>

      </div>

    </main>

     <?php require_once "rodape.php"; ?>

     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>

</html>