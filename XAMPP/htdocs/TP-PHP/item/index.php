<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DAW Eventos</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
    integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  </head>
  <body>
    <div class="wrapper">
      <?php require "../incs/menu.inc" ?>
      <div class="container">
        <div class="card col-10 offset-1">
          <div class="card-body">
            <div>
              <img src="imgs/festeja.jpg" class="w-100" alt="img do item">
            </div>
            <div class="row p-3">
              <div class="col-8">
                <h5 class="card-title">NOME DO ITEM</h5>
                <p class="card-text">Descrição do evento</p>
              </div>
              <div class="col-2">
                <h3 class="card-title">R$ 199,99</h3>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <form class="" action="carrinho.php" method="post">
              <button type="submit" name="carrinho" class="btn btn-success float-right">Comprar</button>
            </form>
          </div>
        </div>
      </div>
      <div class="push"></div>
    </div>
    <?php require "../incs/rodape.inc" ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  </body>
</html>
